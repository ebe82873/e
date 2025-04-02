const MainElement = document.body.getElementsByTagName('main')[0];

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
        this.body.classList.add('Calculator');
        
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

        const UserScore: HTMLDivElement = document.createElement('div');
        UserScore.classList.add('result');
        UserScore.innerHTML = `<p>Your carbon footprint is:</p><br><p class="score">${total}</p>`;

        const AverageScore: HTMLDivElement = document.createElement('div');
        AverageScore.classList.add('result');
        console.log(document.cookie);
        AverageScore.innerHTML = `<p>Average carbon footprint is:</p><br><p class="score">${document.cookie}`
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

            const USER_INPUT: number = await this.body.getUserInputFromQuestion(QUESTION, i+1, this.questions.length);
            console.log(`user input: ${USER_INPUT}`);
        }
    }

    public displayScore(): void {
        this.body.displayScore(this.total)
    }
}

function fetchCookies(): Object {
    let cookies: Object = {};

    for (const cookie of document.cookie.split(';')) {
        const splitted = cookie.split('=');
        const cookieName = splitted[0];
        const value = splitted.splice(1).join('=');

        cookies[cookieName] = value;
    }
    
    return cookies;
}

function fetchCookie(name: string): string {
    return fetchCookies()[name];
}

function main(): void {
    // inits the carbon footprint Calculator
    // const calculator: Calculator = new Calculator();
    // calculator.startQuestions().then( () => {
    //     calculator.displayScore();
    // });
    console.log(fetchCookies());
}

main();