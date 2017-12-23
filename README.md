Si tiene un sitio y desea generar contraseñas automáticamente para los usuarios registrados o para las personas que olvidan sus contraseñas y quieren una nueva, esta clase de PHP es para usted. Es muy fácil de usar, solo usa tres parámetros y comienza a automatizar la creación de contraseñas.

Para incluirlo en sus proyectos, solo tiene que copiar el archivo que viene con el paquete que contiene "PasswordGenerator.php" y colocarlo donde desee en su proyecto. Cuando decida utilizarlo, solo debe asignarlo a una variable como verá a continuación.

$ password = new PassWordGenerator ("Alto", "Alto", 20);

Los 3 parámetros que hemos pasado a la clase definen cómo quieres que se la envíe la contraseña. O solo letras o números combinados con letras o números combinados con signos y letras. ¡Cualquier combinación que quieras! veremos esto más tarde.

Uso
Después de haber realizado la clase y creado la contraseña de acuerdo con sus criterios, la forma correcta de acceder a ella es usar el atributo "contraseña" y lo tendremos disponible para mostrarlo en su pantalla o guardarlo en su base de datos.

echo $ contraseña-> contraseña;

Configuraciones
Hay tres tipos de combinaciones disponibles para generar contraseñas: solo letras, letras y números, letras con números y signos. Y esto lo puedes definir en el primer parámetro que pasas a la clase cuando lo inicializas. Esto puede ser "Normal" para el primer caso, "Medio" para el segundo y "Alto" para el tercero. Este parámetro es obligatorio.

// Solo letras: $ password = new PassWordGenerator ("Normal", "Lento", 10);

// Lettras y numeros: $ password = new PassWordGenerator ("Medio", "Lento", 10);

// Letras. numeros, signos: $ password = new PassWordGenerator ("Alto", "Lento", 10);

El segundo parámetro establece el nivel de seguridad que puede aplicarse y puede pasar los tipos "Lento" a cualquier tipo y "Alto" para decodificar la contraseña creada con la función PHP nativa "base64_encode ()". Este parámetro es obligatorio.

// no decodificado $ password = new PassWordGenerator ("Medio", "Lento", 10);

// Codificado $ password = new PassWordGenerator ("Normal", "Alto", 15);

Y el tercer y último parámetro define la cantidad de caracteres que contendrá la contraseña generada. Puede observar que, en el caso de las contraseñas descodificadas, el número total de conceptos es mayor, pero eso solo se debe a la definición y tan pronto como los decodificadores tengan exactamente el número que usted definió.
