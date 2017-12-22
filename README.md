# g-power-pass
 Si tiene un sitio y desea generar contraseñas automáticamente para los usuarios registrados o para las personas que olvidan sus contraseñas y quieren una nueva, esta clase de PHP es para usted. Es muy fácil de usar, solo usa tres parámetros y comienza a automatizar la creación de contraseñas.
 
 Para integrarlo en sus proyectos, solo tiene que copiar el archivo que viene con el paquete que compró llamado "PasswordGenerator.php" y colocarlo donde desee en su proyecto. Cuando decida usarlo, solo debe asignarlo a una variable como verá a continuación.

<code>$password = new PassWordGenerator("High", "High", 20)</code>;

Los 3 parámetros que hemos pasado a la clase definirán cómo desea que se le envíe la contraseña. O solo letras o números combinados con letras o números combinados con signos y letras. ¡Cualquier combinación que quieras! veremos esto más tarde.


<h3>Uso</h3>
Después de haber instanciado la clase y creado la contraseña de acuerdo con sus criterios, la forma correcta de acceder a ella es usar el atributo "contraseña" y lo tendrá disponible para mostrarlo en su pantalla o guardarlo en su base de datos.

<code>echo $password->password</code>;

<h3>Configuraciones</h3>
Hay tres tipos de combinaciones disponibles para generar contraseñas: solo letras, letras y números, letras con números y signos. Y esto lo puedes definir en el primer parámetro que pasas a la clase cuando lo inicializas. Esto puede ser "Normal" para el primer caso, "Medio" para el segundo y "Alto" para el tercero. Este parámetro es obligatorio.

//Solo letras: <code>$password = new PassWordGenerator("Normal", "Slow", 10)</code>;

//Lettras y numeros: <code>$password = new PassWordGenerator("Medium", "Slow", 10)</code>;

//Letras. numeros, signos: <code>$password = new PassWordGenerator("High", "Slow", 10)</code>;

El segundo parámetro establece el nivel de seguridad que desea aplicar y puede pasar dos tipos "Lento" a cualquier tipo y "Alto" para decodificar la contraseña creada con la función PHP nativa "base64_encode ()". Este parámetro es obligatorio.

// no decodificado $password = <code>new PassWordGenerator("Medium", "Slow", 10)</code>;

// Codificado $password = <code>new PassWordGenerator("Normal", "High", 15)</code>;

Y el tercer y último parámetro define la cantidad de caracteres que contendrá la contraseña generada. Puede observar que, en el caso de las contraseñas descodificadas, el número total de caracteres será mayor, pero eso solo se debe a la decodificación y tan pronto como los decodificadores tengan exactamente el número que usted definió.
