const MainElement = document.body.getElementsByTagName('section')[0];
const averageCarbonFootprint: number = parseFloat(document.getElementById('avg-cbn-ftp')?.innerText ?? '8.2');

if (!MainElement) {
    throw new Error("main tag not found");
}

interface question {
    question: string,
    answers: answers,
}

interface answers {
    [answer: string]: number,
}

class CalculatorBody {
    private body: HTMLElement;

    private questionContainer: HTMLDivElement;
    private questionNumber: HTMLHeadingElement;
    private questionTitle: HTMLHeadingElement;
    private questionPercentMarker: HTMLHeadingElement;
    
    private answersContainer: HTMLDivElement;

    constructor() {
        this.body = document.createElement('div');
        this.body.classList.add('calculator');
        
        MainElement.appendChild(this.body);
    
        this.questionContainer = document.createElement('div');
        this.questionContainer.classList.add('question');
        this.body.appendChild(this.questionContainer);

        this.questionNumber = document.createElement('h2');
        this.questionNumber.classList.add('number');
        this.questionContainer.appendChild(this.questionNumber)

        this.questionTitle = document.createElement('h2');
        this.questionTitle.classList.add('title')
        this.questionContainer.appendChild(this.questionTitle);
        
        this.questionPercentMarker = document.createElement('h2');
        this.questionPercentMarker.classList.add('percent-marker');
        this.questionContainer.appendChild(this.questionPercentMarker);
        
        this.answersContainer = document.createElement('div');
        this.answersContainer.classList.add('answers');
        this.body.appendChild(this.answersContainer);
    }

    public async getUserInputFromQuestion(question: question, questionNumber: number, numberOfQuestions: number): Promise<number> {
        // empties out the answers
        this.answersContainer.innerHTML = '';

        this.displayQuestion(question, questionNumber, numberOfQuestions);

        return new Promise((resolve) => {
            for (const answer in question.answers) {
                if (!Object.prototype.hasOwnProperty.call(question.answers, answer)) {
                    continue;    
                }
                const VALUE = question.answers[answer];

                let button: HTMLButtonElement = document.createElement('button');
                button.type = 'button';
                button.innerText = answer;
                button.classList.add('answer');
                button.addEventListener('click', () => {
                    resolve(VALUE);
                })
                this.answersContainer.appendChild(button);
            }
       });
    }
    
    private displayQuestion(question: question, questionNumber: number, numberOfQuestions: number): void {
        this.questionTitle.innerText = question.question.toString();

        this.questionNumber.innerText = questionNumber.toString();

        // calculates the percentage to a whole number
        this.questionPercentMarker.innerText = Math.trunc(((questionNumber - 1)  / numberOfQuestions) * 100).toString();
    }

    public displayScore(total: number): void {
        // clears the body
        this.body.innerHTML = '';

        const resultsTitle: HTMLHeadingElement = document.createElement('h2');
        resultsTitle.classList.add('title');
        resultsTitle.innerText = 'Results are in.';
        MainElement.insertBefore(resultsTitle, this.body);
        
        const userScore: HTMLDivElement = document.createElement('div');
        userScore.classList.add('result');
        userScore.innerHTML = `<p>Your carbon footprint is:</p><p class="score">${total}</p>`;
        this.body.appendChild(userScore)

        const averageScore: HTMLDivElement = document.createElement('div');
        averageScore.classList.add('result');
        console.log(document.cookie);
        averageScore.innerHTML = `<p>Average carbon footprint is:</p><p class="score">${averageCarbonFootprint}`
        this.body.appendChild(averageScore);

        const buttonsContainer: HTMLDivElement = document.createElement('div');
        buttonsContainer.classList.add('buttons');
        MainElement.appendChild(buttonsContainer);

        const reCalcButton: HTMLButtonElement = document.createElement('button');
        reCalcButton.type = 'button';
        reCalcButton.classList.add('secondary-button');
        reCalcButton.addEventListener('click', () => {
            window.location.href = './';
        })
        reCalcButton.innerText = 'Re-calculate'
        buttonsContainer.appendChild(reCalcButton);

        const saveButton: HTMLButtonElement = document.createElement('button');
        saveButton.type = 'button';
        saveButton.classList.add('primary-button');
        saveButton.addEventListener('click', () => {
            window.location.href = `save_score.php?score=${total}`;
        });
        saveButton.innerText = 'Do something about it';
        buttonsContainer.appendChild(saveButton);
    }
}

class Calculator {
    // add more questions as needed
    private questions: Array<question> = [
        {
            question: 'what type of car do you drive?',
            answers: {
                'small petrol car': 1.2,
                'family petrol car': 1.4,
                'diesel': 1.8,
                'electric': 0.3,
                'hydrogen': 0.2,
                'N/A': 0,
            }
        },
        {
            question: 'how often do you eat meat?',
            answers: {
                'once a meal': 2.6,
                'once a day': 2.1,
                'once every few days': 1.5,
                'once a week': 1.1,
                'less then once a week': 0.3,
                'N/A': 0,
            }
        },
    ];
    private body: CalculatorBody; 
    private total: number;
    
    constructor() {
        this.body = new CalculatorBody();
        this.total = 0;
    }

    public async startQuestions(): Promise<void> {
        for (let i = 0; i < this.questions.length; i++) {
            const QUESTION = this.questions[i];

            const userInput: number = await this.body.getUserInputFromQuestion(QUESTION, i+1, this.questions.length);
            console.log(`user input: ${userInput}`);
            this.total += userInput;
        }
    }

    public displayScore(): void {
        this.body.displayScore(Number.parseFloat(this.total.toPrecision(2)));
    }
}

function main(): void {
    // inits the carbon footprint Calculator
    const calculator: Calculator = new Calculator();
    calculator.startQuestions().then( () => {
        calculator.displayScore();
    });
}

main();