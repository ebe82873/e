# Website Test Report - Further Testing

## New Tests (30 Items)

1.  **Registration - Email Case Sensitivity:** Attempt to register with an email that differs only in case from an existing user.
2.  **Registration - Very Long Inputs:** Test registration with extremely long names, emails, and passwords to check for input limitations and potential overflow issues.
3.  **Login - Incorrect Password Multiple Attempts:** Try logging in with incorrect passwords multiple times. Is there any account lockout mechanism?
4.  **Login - Empty Fields:** Attempt to log in with empty email and/or password fields.
5.  **Account Update - Username Case Sensitivity:** Try updating the username to one that exists but with different casing.
6.  **Account Update - Removing Required Fields (via browser dev tools):** Inspect the HTML and attempt to remove the `required` attribute from email, username, and password fields, then submit the form with them empty.
7.  **Booking - Invalid Date Formats:** Try entering dates in incorrect formats (e.g., text, wrong separators).
8.  **Booking - Maximum Address Length:** Test the address fields with very long strings to see if there are any limitations.
9.  **Booking - Special Characters in Address:** Use special characters in the address fields to ensure they are handled correctly and don't cause issues.
10. **View Bookings - Pagination (if implemented later):** If you implement pagination for a large number of bookings, test that navigation works correctly.
11. **Delete Booking - Without Confirmation (via URL manipulation):** Try to access the delete booking URL with the `conf=1` parameter directly without going through the confirmation page.
12. **Logout - Browser Back Button:** After logging out, use the browser's back button. Can you access logged-in pages?
13. **Account Deletion - Accessing Account Pages After Deletion:** After deleting an account, try to access account-related pages directly via URL or browser history.
14. **Account Deletion - Impact on Existing Bookings (if any):** If a deleted user had bookings, what happens to those bookings in the system? Are they also deleted or orphaned?
15. **Carbon Footprint Calculation - Non-Integer Inputs (if applicable):** If the calculator takes numerical inputs, try entering decimal values or non-numeric characters.
16. **Carbon Footprint Calculation - Zero or Negative Inputs (if applicable):** Test the calculator with zero or negative values for numerical inputs.
17. **Navigation - Footer Links:** Test all links in the footer to ensure they are working.
18. **Navigation - Mobile Responsiveness (Navigation):** Test the navigation on different mobile screen sizes to ensure it is usable (e.g., hamburger menu works correctly).
19. **Form Submission - Double Submission:** Try submitting forms (login, booking, account update) by clicking the submit button twice quickly. Does it cause any issues?
20. **Error Messages - Clarity and User-Friendliness:** Review all error messages displayed to the user. Are they clear, concise, and helpful in guiding the user to correct the issue?
21. **Accessibility - Image `alt` Text:** Use an accessibility tool to check if all images have descriptive `alt` text.
22. **Accessibility - Keyboard Navigation:** Try navigating the entire website using only the keyboard (Tab key, Enter key, Arrow keys).
23. **Accessibility - Color Contrast:** Use a color contrast checker to ensure sufficient contrast between text and background colors for readability, especially in both light and dark modes.
24. **Performance - Page Load Time (Specific Pages):** Measure the load time of individual key pages (homepage, booking form, account page) more precisely.
25. **Performance - Image Optimization:** Check if images on the website are optimized for the web (appropriate file formats and compression).
26. **Security - Cross-Site Scripting (XSS) - Account Update (Username):** Attempt to update the username with a string containing `<script>alert('XSS')</script>`.
27. **Security - Cross-Site Scripting (XSS) - Booking Address Fields:** Inject `<script>alert('XSS')</script>` into the address fields during booking.
28. **Security - Insecure Cookies (Inspect in Browser):** Check the website's cookies in your browser's developer tools. Do they have the `HttpOnly` and `Secure` flags set where appropriate?
29. **Rate Limiting (Login):** Test if there's any rate limiting on login attempts to prevent brute-force attacks. Try many failed login attempts in a short period.
30. **Referer Header Security (Less Common, but worth a check):** Observe the `Referer` header sent by the browser on form submissions. While not a primary security mechanism, ensure it's not revealing sensitive information unnecessarily.

## Things to Redo or Investigate

1.  **Cancel a Consultation:** **Critical:** You were unable to log in to the existing account. This needs immediate investigation and fixing. Once resolved, thoroughly re-test the consultation cancellation functionality. Ensure there is a clear way for the user to initiate cancellation and a confirmation step.
2.  **Login Failure and New Account Creation with Same Email:** **Critical:** Investigate why you couldn't log in to the existing account but *could* create a new account with the same email. This suggests a potential issue with the login mechanism or user identification. Ensure that duplicate accounts with the same email are handled correctly (either preventing creation or linking to the existing account).
3.  **SQL Injection on Booking - Address Fields:** **High:** The test showed that SQL injection attempts were taken as part of the address. This means your booking process is currently vulnerable to SQL injection via the address fields. **This is a major security concern and needs immediate attention.** You must implement proper input sanitization or, preferably, parameterized queries to prevent this.
4.  **Suggestions on How to Reduce Carbon Footprint:** **Enhancement:** As noted, this currently links to booking. In the future, prioritize developing dedicated pages with meaningful suggestions.
5.  **Home Page Placeholders:** **Improvement:** Populate the placeholder sections with actual, relevant content about your products and information.
6.  **Light and Dark Mode:** **Improvement:** Implement a toggle button for manual switching of themes. Also, improve the dark mode color scheme for better readability.
7.  **SQL Injection on Login - Mitigation:** While the immediate attempts were rejected, the comment suggests reviewing the backend code. Ensure you are using secure methods like prepared statements or parameterized queries with PDO or MySQLi to prevent SQL injection, rather than relying solely on escaping.
8.  **File Upload Testing (Profile Picture):** **Important:** You haven't reported testing the actual profile picture upload functionality. If implemented, test various file types, sizes, and potential security vulnerabilities related to file uploads.
9.  **CSRF Protection:** **Security - Investigation Required:** You need to determine if CSRF protection is implemented on your forms. If not, research and implement appropriate measures to prevent cross-site request forgery attacks.

By addressing these points and performing the new tests, you'll significantly improve the robustness and security of your PHP website. Remember that security vulnerabilities like SQL injection need immediate attention.