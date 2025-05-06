# How To Aid Future Development

## Gathering Feedback
Gathering information is the most effective way to improve the quality of anything. For a website, user feedback is a key method to elevate standards. When seeking feedback, it's crucial to ask questions that yield specific and relevant information.

## How to Gather Feedback
While one-to-one interviews can provide rich insights, analysing the data from a large number of such interactions can be cumbersome for creating charts and numerical summaries. Distributing questionnaires to users offers a more efficient way to collect data from a larger audience. However, this approach can feel less personal, and technical issues with the website could negatively impact the feedback process. A balanced approach would be to have users complete a form under supervision. This ensures a positive user experience with the site while also facilitating the collection of reliable data. Additionally, having a backup presentation illustrating the intended functionality of the website can be useful if any features malfunction during the feedback session. To maximise participation, offering an incentive to users for completing the questionnaire is a recommended practice.

# Making The Form

## The Design
A crucial initial step in designing a questionnaire is identifying the target demographic. In this case, participants can be broadly categorised into those with technical expertise and those without.

## Technical Participants
These individuals possess a demonstrable level of competence in computer systems and software development. Their experience may range from a foundational understanding to advanced proficiency in software engineering principles and practices.

## Non-Technical Participants
This group, conversely, lacks formal training or significant practical experience in software development or computer systems.
Accurately classifying participants is paramount for tailoring the questionnaire's language and complexity, ensuring its accessibility and relevance. While a direct "yes/no" question could offer a rudimentary classification, a more nuanced approach is preferable. This could involve a preliminary assessment of participants' educational background, professional experience, or self-reported technical skills. For example, participants could be asked to rate their proficiency in specific software or programming languages, or to describe their experience with software development methodologies.

## How To Write a Good Questionnaire
Crafting an effective questionnaire necessitates meticulous attention to detail and adherence to established best practices. The following principles are crucial.

### Relevance
Each question must directly contribute to the research objectives, avoiding extraneous or tangential inquiries, e.g., "Do you prefer crumpets or scones?".

### Conciseness
Questions should be brief and to the point, minimising cognitive load and maximising participant engagement.

### Clarity
Employing straightforward, unambiguous language is essential. Avoid jargon, technical terms, or overly complex sentence structures that may confuse respondents.

### Logical Sequencing
Questions should be arranged in a logical order, progressing from general to specific, and grouping related items thematically.

### Sensitivity
Handle sensitive or confidential data (e.g., personal information) with the utmost care, adhering to ethical guidelines and data protection regulations.

### Neutrality
Questions should be phrased in a neutral, unbiased manner, avoiding leading questions or those that may influence responses.

### Pilot Testing
Before widespread distribution, the questionnaire should be rigorously tested with a representative sample to identify any potential ambiguities, inconsistencies, or areas for improvement.

## Question Types

### Closed Questions
These offer pre-defined response options, facilitating quantitative analysis and minimising response variability.

### Open Questions
While valuable for gathering rich, qualitative data, these require more time and effort from participants and are more challenging to analyse systematically. Their use should be judicious and purposeful. It is important to note that closed questions, whilst easier to analyse, can sometimes force respondents into categories that don't truly reflect their views. Therefore, a balance of both is often advocated.

### Response Scales
When using scales (e.g., Likert scales), consider including a neutral midpoint (e.g., "neither agree nor disagree") to allow for a less decisive opinion. While avoiding a 7-point scale can prevent the central tendency bias, ensuring a clear distinction between scale points (e.g., 1 to 6) is important for meaningful data.

Regarding the platform for creating the questionnaire, several options exist for hosting online forms. While Microsoft Forms offers branching logic and integration with other Microsoft products, Google Forms is a proficient tool known for its user-friendly interface, robust data analysis features, and easy accessibility for participants. The choice of platform should be guided by factors such as the researcher's familiarity, the platform's features (including branching logic and data export options), and its compliance with data protection regulations.

## What Questions to Include
The questionnaire should elicit information directly relevant to the research objectives. At a minimum, it should include the following.

### Participant Identification
A name and, if necessary for follow-up, an email address are useful for tracking responses. However, it's vital to consider data protection and anonymity requirements.

### Technical Background
Questions about the participant's current employment or education are essential for categorising them as technical or non-technical. This section could be expanded to include specific questions about their experience with relevant technologies, programming languages, or software development methodologies.

### Website Evaluation
Questions should assess the quality, usability, robustness, and aesthetic appeal (styles and colours) of the website under evaluation. These questions should be carefully crafted to elicit specific, actionable feedback.

### Form Evaluation
An overview of the form itself is needed to gauge the clarity and ease of completion, which can impact the accuracy and reliability of the collected data. This could include questions about the clarity of instructions, the ease of navigation through the form, and the perceived length and complexity of the questionnaire.

# The Questionnaire

## The Sections
The form has been divided into 9 manageable sections to maintain user engagement. Each section focuses on a specific aspect of the website with a concise set of questions, aiming for the minimum number required to gather meaningful feedback.

### Section 1 (About You)
1. What is your name?
    - Open answer.
    - Aims to identify the respondent.
2. Would you describe yourself as someone with a strong interest in technology?
    - This question aims to identify technically-minded individuals for potential follow-up on more technical aspects.
    - Radio option:
        + Yes
        + No

### Section 2 (Back-End Analysis - Based on Screenshots)
*Note: This section assumes participants are reviewing screenshots of the back-end.*
1. Based on the screenshots provided, what is the title of the course you are currently studying (if applicable)?
    - Open answer.
    - Aims to gauge the respondent's level of technical understanding.
2. How would you rate the apparent robustness (stability and error handling) of the system shown in the screenshots?
    - Likert scale:
        + 1: Very poor
        + 6: Excellent
    - Aims to assess the perceived level of error handling.
3. Based on the code snippets (if provided in screenshots), how easy do you think it would be to understand the codebase?
    - Likert scale:
        + 1: Very difficult to understand
        + 6: Very easy to understand
    - Aims to assess the clarity and formatting of the code.
4. Based on what you've seen, how confident would you be in your ability to contribute to the further development of this website?
    - Likert scale:
        + 1: Not at all confident
        + 6: Very confident
    - Assesses the perceived ease of working with the existing code.

*Change Made:* Added "(Based on Screenshots)" to the section title and clarified the context of the questions to refer to the provided screenshots, as direct interaction with the back-end is unlikely.

### Section 3 (Rolsa Account Functionality)
*Note: This section assumes participants have interacted with a simulated or actual Rolsa account.*
1. What was the email address you used for your test account?
    - Aims to retrieve the test account details if needed for later review.
2. What was the password you used for your test account?
    - Aims to retrieve the test account details if needed for later review.
3. How easy was the process of registering a new account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Identifies potential areas for improvement in the registration process.
4. How easy was it to log in to your account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Identifies potential issues with the login system.
5. How easy was it to change your account name?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the user-friendliness of the name change feature.
6. How easy was it to log out of your account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Identifies any unintuitive aspects of the logout process.
7. How easy was it to find the option to delete your account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the discoverability of the account deletion feature.

*Change Made:* Added a note clarifying that this section relates to interaction with a Rolsa account.

### Section 4 (Booking System)
*Note: This section assumes participants have interacted with a simulated or actual booking system.*
1. How easy was it to create a new booking?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Aims to identify any design flaws in the booking process.
2. How easy was it to find the option to delete a booking?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Pinpoints any potential issues with the discoverability of the delete function.
3. Was it easy to find information about a specific booking?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the clarity and accessibility of booking details.

*Change Made:* Added a note clarifying that this section relates to interaction with the booking system.

### Section 5 (Calculator Functionality)
*Note: This section assumes participants have interacted with a calculator feature on the website.*
1. How easy were the questions/inputs to understand and use in the calculator?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the clarity of language and design of the calculator interface.
2. How relevant did you find the calculator's purpose and the questions it asked?
    - Likert scale:
        + 1: Not at all relevant
        + 6: Very relevant
    - Aims to determine if the calculator meets user expectations.

*Change Made:* Added a note clarifying that this section relates to interaction with the calculator feature. Changed "where" to "were" in the first question for grammatical correctness.

### Section 6 (Home Page Experience)
*Note: This section focuses on the user's experience of the website's home page.*
1. How would you rate the quality of the articles or content presented on the home page?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Aims to gauge the perceived quality of the home page content.
2. How easy did you find the navigation on the home page?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Assesses the user-friendliness of the home page navigation.
3. How would you rate the overall layout and organisation of the home page?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Aims to evaluate the macro-level design of the home page.

*Change Made:* Added a note clarifying that this section focuses on the home page experience. Changed "where" to "rate" in the first question for better phrasing.

### Section 7 (Navigation and Footer)
*Note: This section assesses the ease of finding key navigational elements.*
1. How easy was it to locate the main navigation bar (navbar)?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the intuitiveness of the website's primary navigation placement.
2. How easy was it to find specific links within the navigation bar?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Evaluates the clarity and organisation of the navbar links.
3. How easy was it to locate the website's footer?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the discoverability of the footer.
4. How easy was it to find the contact address and email for Rolsa within the footer (if present)?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses both the presence and discoverability of contact information in the footer.

*Change Made:* Added a note clarifying the focus of this section. Rephrased the last question for better clarity, ensuring it addresses both the presence and ease of finding the information.

### Section 8 (Visual Design and User Interface)
*Note: This section explores the aesthetic and usability aspects of the website.*
1. Which colour scheme were you primarily using during your evaluation?
    - Radio option:
        + Light
        + Dark
    - Aims to gather data on user preference for colour schemes and potentially identify design issues specific to a particular scheme.
2. How visually pleasing did you find the colours used on the site?
    - Likert scale:
        + 1: Very harsh
        + 6: Very pleasing
    - Assesses the aesthetic appeal of the website's colour palette.
3. How easy did you find the various elements (buttons, links, text areas, etc.) on the site to use, interact with, and navigate?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Directly assesses the usability of individual UI elements and overall navigation.
4. Which of the following pages or sections do you think currently have good design? (Select all that apply)
    - Multiple choice:
        + Home
        + Calculator
        + Consultations
        + Booking
        + Account
        + T&Cs
        + Cookies
        + None of the above
    - Identifies areas of the website that are perceived positively in terms of design.
5. Which of the following pages or sections do you think currently have poor design? (Select all that apply)
    - Multiple choice:
        + Home
        + Calculator
        + Consultations
        + Booking
        + Account
        + T&Cs
        + Cookies
        + None of the above
    - Identifies areas of the website that are perceived negatively in terms of design.
6. Which of the following pages or sections do you think could benefit from improved design? (Select all that apply)
    - Multiple choice:
        + Home
        + Calculator
        + Consultations
        + Booking
        + Account
        + T&Cs
        + Cookies
        + None of the above
    - Identifies areas where users see potential for design enhancement.

*Change Made:* Added a note clarifying the focus of this section. Changed "where" to "were" in the first question for grammatical correctness. Changed the multiple-choice questions to "Select all that apply" for clarity, as users might have multiple opinions.

### Section 9 (Final Feedback)
1. Do you have any other comments or suggestions regarding the website?
    - Open answer.
    - Optional.
    - Provides an opportunity for users to offer detailed, free-form feedback on any aspect of the website.
2. How clear and easy to understand did you find this questionnaire?
    - Likert scale:
        + 1: Very unclear
        + 6: Very clear
    - Optional.
    - Assesses the quality and clarity of the questionnaire itself, which can impact the reliability of the responses.

*Change Made:* Rephrased the second question for better clarity. Changed "poor" to "Very unclear" and "good" to "Very clear" for a more direct assessment of clarity.

## Gathering The Feedback
As previously mentioned, participants were asked to interact with the website and then complete this questionnaire. As a token of appreciation for their time and effort, they were offered a lollipop upon completion of the form.

# How To Aid Future Development

## Gathering Feedback
Gathering information is the most effective way to improve the quality of anything. For a website, user feedback is a key method to elevate standards. When seeking feedback, it's crucial to ask questions that yield specific and relevant information.

## How to Gather Feedback
While one-to-one interviews can provide rich insights, analysing the data from a large number of such interactions can be cumbersome for creating charts and numerical summaries. Distributing questionnaires to users offers a more efficient way to collect data from a larger audience. However, this approach can feel less personal, and technical issues with the website could negatively impact the feedback process. A balanced approach would be to have users complete a form under supervision. This ensures a positive user experience with the site while also facilitating the collection of reliable data. Additionally, having a backup presentation illustrating the intended functionality of the website can be useful if any features malfunction during the feedback session. To maximise participation, offering an incentive to users for completing the questionnaire is a recommended practice.

---

# Making The Form

## The Design
A crucial initial step in designing a questionnaire is identifying the target demographic. In this case, participants can be broadly categorised into those with technical expertise and those without.

## Technical Participants
These individuals possess a demonstrable level of competence in computer systems and software development. Their experience may range from a foundational understanding to advanced proficiency in software engineering principles and practices.

## Non-Technical Participants
This group, conversely, lacks formal training or significant practical experience in software development or computer systems.
Accurately classifying participants is paramount for tailoring the questionnaire's language and complexity, ensuring its accessibility and relevance. While a direct "yes/no" question could offer a rudimentary classification, a more nuanced approach is preferable. This could involve a preliminary assessment of participants' educational background, professional experience, or self-reported technical skills. For example, participants could be asked to rate their proficiency in specific software or programming languages, or to describe their experience with software development methodologies.

## How To Write a Good Questionnaire
Crafting an effective questionnaire necessitates meticulous attention to detail and adherence to established best practices. The following principles are crucial.

### Relevance
Each question must directly contribute to the research objectives, avoiding extraneous or tangential inquiries, e.g., "

---

# How To Aid Future Development: Gathering Feedback on the Prototype

## Introduction
This document outlines the plan and materials for gathering feedback on the prototype digital solution. The aim is to obtain valuable insights from both technical and non-technical audiences to evaluate the prototype's effectiveness and inform future development iterations.

## Demonstration Materials

To effectively gather feedback, tailored demonstrations of the prototype's functionality will be prepared for different audiences.

### Demonstration Plan for a Technical Audience
This demonstration will focus on the underlying technical aspects of the prototype. Key areas to highlight include:
* **System Architecture:** A visual overview (if applicable) and explanation of the main components and their interactions.
* **Code Structure and Quality:** Showcase well-structured, commented code and adherence to coding standards (using code snippets or a walkthrough of key modules).
* **Algorithms and Logic:** Explain any complex algorithms or logical processes implemented, emphasizing efficiency and robustness.
* **Data Handling:** Demonstrate how data is stored, retrieved, and manipulated within the prototype.
* **Integration with other systems (if applicable):** Show how the prototype interacts with external APIs or databases.
* **Error Handling and Robustness:** Briefly demonstrate how the prototype handles potential errors and edge cases (linking to the "Back-end Analysis" section of the questionnaire).

The demonstration will likely involve a screen share of the development environment and potentially a live walkthrough of specific code sections. Questions will be encouraged throughout.

### Demonstration Plan for a Non-Technical Audience
This demonstration will focus on the user-facing aspects and overall experience of the prototype. Key areas to highlight include:
* **User Interface (UI):** Showcase the visual design, layout, and branding of the prototype.
* **Key Features and Functionality:** Demonstrate the core features of the prototype in a clear and concise manner, focusing on user workflows.
* **User Experience (UX):** Emphasize the ease of use, intuitiveness, and overall satisfaction of interacting with the prototype.
* **Navigation and Information Architecture:** Show how users can move through the prototype and find the information they need.
* **Responsiveness (if applicable):** Demonstrate how the prototype adapts to different screen sizes.

The demonstration will involve a walkthrough of the prototype as a user would interact with it, potentially using a screen recording or a live interaction. The language used will be clear and avoid technical jargon.

## Feedback Gathering Plan

This plan outlines the strategy for collecting feedback from both technical and non-technical users.

### Target Audiences
* **Technical Audience:** Software developers (potentially from within the course or externally), individuals with a strong understanding of programming principles.
* **Non-Technical Audience:** Potential end-users (if identifiable), clients (if applicable), individuals with limited or no technical background.

### Methods
The following methods will be employed to gather feedback:
* **Demonstrations:** As outlined above, tailored demonstrations will provide context for the feedback.
* **Questionnaires:** The detailed questionnaire provided in the previous version will be used to gather structured feedback on specific aspects.
* **Observation (if feasible):** Observing users interacting with the prototype (either during the demonstration or separately) can provide valuable insights into usability issues.
* **Informal Discussions:** Encouraging open discussion and questions during and after the demonstrations.

### Timeline and Location
Feedback will be gathered during the scheduled supervised time and potentially during unsupervised time from external sources. This will involve:
* **Supervised Sessions:** Demonstrating the prototype to peers and potentially instructors (acting as technical or non-technical users) and administering the questionnaire.
* **Unsupervised Sessions:** Seeking feedback from individuals outside the immediate learning environment (e.g., friends, family, or online communities if appropriate and ethical).

### Focus Areas for Feedback
Feedback will be actively sought on the following aspects:
* **Usability:** How easy and intuitive is the prototype to use?
* **Functionality:** Does the prototype perform as expected and meet the intended requirements?
* **Design (UI/UX):** How visually appealing and user-friendly is the interface?
* **Performance:** Is the prototype responsive and efficient? (More relevant for technical feedback)
* **Robustness:** How well does the prototype handle errors? (More relevant for technical feedback)
* **Clarity of Information:** Is the information presented clearly and understandably?

## Using the Materials to Gather Feedback

The demonstrations will serve as an introduction to the prototype, providing context for the questionnaire. For technical users, the demonstration will allow them to assess the underlying architecture and code quality before answering more specific questions. For non-technical users, the demonstration will focus on their experience and allow them to provide feedback on usability and design.

Following the demonstrations (or during user observation), participants will be asked to complete the questionnaire. Open discussions will be encouraged to gather more qualitative feedback and address any specific questions or concerns.

## Recording the Feedback

The feedback received will be recorded in the following formats to facilitate analysis:

* **Questionnaire Responses:** The data from the Google Form (or other platform used) will be collected and potentially exported for analysis (e.g., to a spreadsheet).
* **Notes from Demonstrations and Discussions:** Key points, observations, and suggestions raised during the demonstrations and informal discussions will be documented in written notes. These notes will include the type of user (technical/non-technical) and the specific aspects of the prototype they are referring to.
* **Categorised Feedback Log:** A separate log (e.g., a spreadsheet) may be created to summarise the feedback, categorising it by user type, affected feature, type of issue (usability, functionality, design), and a brief description of the feedback. This will aid in identifying recurring themes and prioritising areas for improvement.

## The Questionnaire

**(The questionnaire content from your previous version remains largely the same and is included here for completeness. Minor edits for clarity based on the improvements above are incorporated.)**

### Section 1 (About You)
1. What is your name?
    - Open answer.
    - Aims to identify the respondent.
2. Would you describe yourself as someone with a strong interest in technology?
    - This question aims to identify technically-minded individuals for potential follow-up on more technical aspects.
    - Radio option:
        + Yes
        + No

### Section 2 (Back-End Analysis - Based on the Demonstration)
*Note: This section is more relevant for technical participants who have seen the technical demonstration.*
1. Based on the demonstration, what is the title of the course you are currently studying (if applicable)?
    - Open answer.
    - Aims to gauge the respondent's level of technical understanding.
2. How would you rate the apparent robustness (stability and error handling) of the system as demonstrated?
    - Likert scale:
        + 1: Very poor
        + 6: Excellent
    - Aims to assess the perceived level of error handling.
3. Based on the code snippets or architecture overview (if shown), how easy do you think it would be to understand the codebase?
    - Likert scale:
        + 1: Very difficult to understand
        + 6: Very easy to understand
    - Aims to assess the clarity and formatting of the code.
4. Based on what you've seen, how confident would you be in your ability to contribute to the further development of this website?
    - Likert scale:
        + 1: Not at all confident
        + 6: Very confident
    - Assesses the perceived ease of working with the existing code.

### Section 3 (Rolsa Account Functionality)
*Note: This section relates to the Rolsa account functionality as demonstrated.*
1. What was the email address you used for your test account (if applicable)?
    - Aims to retrieve the test account details if needed for later review.
2. What was the password you used for your test account (if applicable)?
    - Aims to retrieve the test account details if needed for later review.
3. How easy was the process of registering a new account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Identifies potential areas for improvement in the registration process.
4. How easy was it to log in to your account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Identifies potential issues with the login system.
5. How easy was it to change your account name?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the user-friendliness of the name change feature.
6. How easy was it to log out of your account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Identifies any unintuitive aspects of the logout process.
7. How easy was it to find the option to delete your account?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the discoverability of the account deletion feature.

### Section 4 (Booking System)
*Note: This section relates to the booking system functionality as demonstrated.*
1. How easy was it to create a new booking?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Aims to identify any design flaws in the booking process.
2. How easy was it to find the option to delete a booking?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Pinpoints any potential issues with the discoverability of the delete function.
3. Was it easy to find information about a specific booking?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the clarity and accessibility of booking details.

### Section 5 (Calculator Functionality)
*Note: This section relates to the calculator functionality as demonstrated.*
1. How easy were the questions/inputs to understand and use in the calculator?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the clarity of language and design of the calculator interface.
2. How relevant did you feel the calculator's purpose and the questions it asked?
    - Likert scale:
        + 1: Not at all relevant
        + 6: Very relevant
    - Aims to determine if the calculator meets user expectations.

### Section 6 (Home Page Experience)
*Note: This section focuses on your experience of the website's home page as demonstrated.*
1. How would you rate the quality of the articles or content presented on the home page?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Aims to gauge the perceived quality of the home page content.
2. How easy did you find the navigation on the home page?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Assesses the user-friendliness of the home page navigation.
3. How would you rate the overall layout and organisation of the home page?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Aims to evaluate the macro-level design of the home page.

### Section 7 (Navigation and Footer)
*Note: This section assesses the ease of finding key navigational elements as demonstrated.*
1. How easy was it to locate the main navigation bar (navbar)?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the intuitiveness of the website's primary navigation placement.
2. How easy was it to find specific links within the navigation bar?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Evaluates the clarity and organisation of the navbar links.
3. How easy was it to locate the website's footer?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses the discoverability of the footer.
4. How easy was it to find the contact address and email for Rolsa within the footer (if present)?
    - Likert scale:
        + 1: Very difficult
        + 6: Very easy
    - Assesses both the presence and discoverability of contact information in the footer.

### Section 8 (Visual Design and User Interface)
*Note: This section explores the aesthetic and usability aspects of the website as demonstrated.*
1. Which colour scheme were you primarily using during your evaluation?
    - Radio option:
        + Light
        + Dark
    - Aims to gather data on user preference for colour schemes and potentially identify design issues specific to a particular scheme.
2. How visually pleasing did you find the colours used on the site?
    - Likert scale:
        + 1: Very harsh
        + 6: Very pleasing
    - Assesses the aesthetic appeal of the website's colour palette.
3. How easy did you find the various elements (buttons, links, text areas, etc.) on the site to use, interact with, and navigate?
    - Likert scale:
        + 1: Very poor
        + 6: Very good
    - Directly assesses the usability of individual UI elements and overall navigation.
4. Which of the following pages or sections do you think currently have good design? (Select all that apply)
    - Multiple choice:
        + Home
        + Calculator
        + Consultations
        + Booking
        + Account
        + T&Cs
        + Cookies
        + None of the above
    - Identifies areas of the website that are perceived positively in terms of design.
5. Which of the following pages or sections do you think currently have poor design? (Select all that apply)
    - Multiple choice:
        + Home
        + Calculator
        + Consultations
        + Booking
        + Account
        + T&Cs
        + Cookies
        + None of the above
    - Identifies areas of the website that are perceived negatively in terms of design.
6. Which of the following pages or sections do you think could benefit from improved design? (Select all that apply)
    - Multiple choice:
        + Home
        + Calculator
        + Consultations
        + Booking
        + Account
        + T&Cs
        + Cookies
        + None of the above
    - Identifies areas where users see potential for design enhancement.

### Section 9 (Final Feedback)
1. Do you have any other comments or suggestions regarding the website?
    - Open answer.
    - Optional.
    - Provides an opportunity for users to offer detailed, free-form feedback on any aspect of the website.
2. How clear and easy to understand did you find this questionnaire?
    - Likert scale:
        + 1: Very unclear
        + 6: Very clear
    - Optional.
    - Assesses the quality and clarity of the questionnaire itself, which can impact the reliability of the responses.

## Gathering The Feedback
As part of this task, the prototype functionality was demonstrated to both technical and non-technical audiences. Following the demonstrations, participants were asked to provide feedback using the questionnaire provided above. Observations and comments made during the demonstrations were also recorded. The aim of this process was to gather comprehensive feedback to inform the evaluation of the prototype and plan future development iterations.