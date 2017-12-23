To integrate it into your projects you only have to copy the file that comes with the package that you purchased called "PasswordGenerator.php" and place it wherever you want in your project. When you decide to use it you should only assign it to a variable as you will see below..

$password = new PassWordGenerator("High", "High", 20);

The 3 parameters we have passed on to the class will define how you want the password to be brought to you. Either only letters, or numbers combined with letters or numbers combined with signs and letters. Any combination you want! we will see this later.
Usage

After you have instantiated the class and created the password according to your criteria, the correct way to access it is to use the "password" attribute and you will have it available to display it on your screen or save it to your database.

echo $password->password;
Settings

There are 3 types of combinations available to generate passwords: Only letters, letters and numbers, letters with numbers and signs. And this you can define in the first parameter you pass to the class when you initialize it. This can be "Normal" for the first case, "Medium" for the second and "High" for the third. This parameter is required.

//Only Letters: $password = new PassWordGenerator("Normal", "Slow", 10);

//Letters and Numbers: $password = new PassWordGenerator("Medium", "Slow", 10);

//Letters, Numbers and Signs: $password = new PassWordGenerator("High", "Slow", 10);

The second parameter sets the level of security you want to apply and you can pass two "Slow" types to any type and "High" to decode the password created with the "base64_encode ()" native PHP function. This parameter is required.

// Not Decoded $password = new PassWordGenerator("Medium", "Slow", 10);

// Decoded $password = new PassWordGenerator("Normal", "High", 15);

And the third and last parameter defines the number of characters that the generated password will contain. You may notice that for the case of decoded passwords the total number of characters will be greater but that is only thanks to the decoding and as soon as the decoders will have exactly the number that you defined
