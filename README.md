# g-power-pass
 If you have a site and want to generate passwords automatically for registered users or for people who forget their passwords and want a new password, this PHP class is for you. It is very easy to use, it only uses three parameters and it begins to automate the creation of passwords.

To include it in your projects, simply copy the file that comes with the package containing "PasswordGenerator.php" and place it where you want in your project. When you decide to use it, you should only assign it to a variable as you will see below.

$ password = new PassWordGenerator ("High", "High", 20);

The 3 parameters that we have passed to the class define how you want the password to be sent to you. Or just letters or numbers combined with letters or numbers combined with signs and letters. Any combination you want! We'll see this later.

Use
After having made the class and created the password according to your criteria, the correct way to access it is to use the attribute "password" and we will have it available to display it on your screen or save it in your database.

echo $ password-> password;

Configurations
There are three types of combinations available to generate passwords: only letters, letters and numbers, letters with numbers and signs. And this you can define in the first parameter that you pass to the class when you initialize it. This can be "Normal" for the first case, "Medium" for the second and "High" for the third. This parameter is mandatory.

// Only letters: $ password = new PassWordGenerator ("Normal", "Slow", 10);

// Letters and numbers: $ password = new PassWordGenerator ("Medium", "Slow", 10);

// Letters. numbers, signs: $ password = new PassWordGenerator ("High", "Slow", 10);

The second parameter establishes the level of security that can be applied and can pass the "Slow" types to any type and "High" to decode the password created with the native PHP function "base64_encode ()". This parameter is mandatory.

// not decoded $ password = new PassWordGenerator ("Medium", "Slow", 10);

// Coded $ password = new PassWordGenerator ("Normal", "High", 15);

And the third and last parameter defines the number of characters that the generated password will contain. You may notice that, in the case of decoded passwords, the total number of concepts is greater, but that is only due to the definition and as soon as the decoders have exactly the number you defined.
