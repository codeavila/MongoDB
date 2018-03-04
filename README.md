#Tabla de orientacion para entrar al mundo de MongoDB
SQL o Relacional  | MongoDB
------------- | -------------
Base de Datos  | Base de Datos
Tabla  | Collection / Coleccion
"Registro" / Row  | Document / Documento
Join  | Lookup
Foreign Key  | Reference / Referencia
 Multi-table transaction  | Single Document Transaction
 
#Comandos para la terminal

	$:mongod (Inicializa MongoDB)
	$:mongo (abre el Shell para trabajar con MongoDB)


##Comandos de MongoDB

Crear una Colecion ( Una BD )
	
	$: mongo NombreDeLaBaseDeDatos
	
###Ejemplo
	
	$: mongo ejemplo 

Para ver la Base de Datos con la que se esta trabajando
	
	$: db

Para mostrar todas las Base de Datos
	
	$: show dbs

Para seleccionar la Base de Datos con la que deseamos trabajar

	$: use NombreDeLaBaseDeDatos
	
	Ejemplo
	
	$: use ejemplo	

#Comandos
######Este comando te muestra las Carpetas que contiene la coleccion que 		seleccionamos. (Muestra los primeros 20 resultados que encuentre)
	$: db.NombreDeLaColeccion.find()

###Ejemplo	
	$: db.ejemplo.find()
	
#####Ese resultado se puede guardar en una variebla para luego consultar por medio de una posicion que queramos obtener ( Imagina un Array con los datos y un Indice para utilizarlo para el contenido de la posicion )
	$: var nombreDeLaVariable = db.NombreDeLaColeccion.find()
###Ejemplo
	$: var	array = db.ejemplo.find()
	
	-Para imprimir el Indice al cual queremos acceder utilizando la variable anterior haras lo siguiente
	
	$: printjson ( array [ 4 ] )
	
	-Donde 'array' es la variable que utilizamos para guardar el resultado de la consulta y el numero dentro de los corchetes es el Indice al cual queremos acceder.
	 

######Este comando imprime el contenido de una Carpeta en formato JSON
	$: db.NombreDeLaColeccion.pretty()

###Ejemplo	
	$: db.ejemplo.find()


#Insert

Para insertar datos en MongoDB se utiliza una estructura de tipo JSON como podras ver a continuacion:

#### Estructura