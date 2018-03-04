# Tabla de orientacion para entrar al mundo de MongoDB
SQL o Relacional  | MongoDB
------------- | -------------
Base de Datos  | Base de Datos
Tabla  | Collection / Coleccion
"Registro" / Row  | Document / Documento
Join  | Lookup
Foreign Key  | Reference / Referencia
 Multi-table transaction  | Single Document Transaction
 
# Comandos para la terminal

	$:mongod (Inicializa MongoDB)
	$:mongo (abre el Shell para trabajar con MongoDB)


## Comandos de MongoDB

Crear una Colecion ( Una BD )
	
	 mongo NombreDeLaBaseDeDatos
	
### Ejemplo
	
	 mongo ejemplo 

Para ver la Base de Datos con la que se esta trabajando
	
	 db

Para mostrar todas las Base de Datos
	
	 show dbs

Para seleccionar la Base de Datos con la que deseamos trabajar

	 use NombreDeLaBaseDeDatos
	
### Ejemplo
	
	 use ejemplo	

# Insert

Para insertar datos en MongoDB se utiliza una estructura de tipo JSON como podras ver a continuacion:

#### Estructura

    var variable = { 
        "nombre" : "Eric", "apellido" : "Avila", "edad" : "27"  
        }
    
> Nota : Una manera que en lo personal me gusto es la de declarar una variable que contenga la `consulta`(por decirlo de alguna manera) y despues agregarla al `metodo` al cual usaremos.

#### Una vez guardada, la ingresamos en el `"metodo"`. 

> Recuerda que estamos utilizando la Base de Datos llamada : **`ejemplo`**
 
    db.ejemplo.insert( variable );

#### En caso de que no exista el ´Documento´se creara automaticamente.

#### Ejecutamos el metodo
    db.ejemplo.find()
>> Y obtendremos el `"Registro"` antes insertado.

# Update

Para actualizar datos en MongoDB hay que tener ciertas consideraciones que se muestran a continuacion.

#### Estructura

>db.ejemplo.update( 
>   **`{ "nombre" : "Eric" }`** , { "apellido" : "Avila", "edad" : "50"  }  )

>> ### Siempre ten en cuenta que al momento de hacer la consulta de esta forma, tienes que poner todos sus campos, ya que si no lo haces se _actualizara_ con las propiedas que solo hayas puesto en la sentencia.
>>> Para evitar existe lo siguiente 

#### Estructura

db.ejemplo.update( { "nombre" : "Eric" }, { **`$set :   { "TipoDeSanGre" : "A+" }`**  }, { **_upsert : true_** }  )

>>> Tranquilo enseguida sabras porque se agrega **`upsert`** enseguida.


Hay una `"configuracion"`dentro de la estructura del **`Update`** que nos da la siguientes prestaciones.
     
### -> upsert : true / true

var variable = { "nombre" : "Eric", "apellido" : "Avila", "edad" : "27"  } ,  **`{ upsert : true }`**

> Con esta caracteristica activada **true** hace que si el `Documento`no existe se creá y si existe lo actualiza. Si agregamos el estado de la variable a **false** hace lo contrario
>>En otras palabras si no lo encuentra no hace nada.
    
> Nota : **Recuerda que con esa consulta solo actualiza la primera coincidencia**

### -> multi : true / true

var variable = { "nombre" : "Eric", "apellido" : "Avila", "edad" : "27"  } ,  **`{ multi : true }`**

> Con esta caracteristica activada **true** especificamos que queremos `actualizar multiples documentos` por default esta se cuentra en **false**. Aunque no lo agreguemos en nuestra sentencia siempre estara en ese estado a menos que lo cambiemos, obviamente.

### Si desearamos eliminar un `campo` de nuestro `documento` se haria de la siguiente forma

>db.products.update( { _id: ObjectId("51e6681a2b7e6dab80c1ebd6") }, { **`$unset:{ "edad" : "1" }`** } )


## Save 

**`.save`** realiza la misma funcion que el **`update`** con **_upsert_**. Esto quiere decir que si **NO EXISTE EL DOCUMENTO** lo va a crear ó si existe lo actualizara.

### Estructura

>db.ejemplo.save( **`_id: ObjectId("50691737d386d8fadbd6b01d")`** , { "apellido" : "Avila", "edad" : "12"  }  )


# **`Recomiendo actualizar utilizando como parametro el _id_ ya que con esto tenemos mas control y asi evitaremos errores.`**

# Find / FindOne

Estos metodos son utilizados para buscar `documentos` en la base de datos, claro ambas son para casos especificamos como te muestro a continuacion.

## Find

### Estructura

###### Este comando te muestra los `documentos` que contiene la coleccion que seleccionamos. (Muestra los primeros 20 resultados que encuentre por default)

	db.NombreDeLaColeccion.find()

### Ejemplo	

	db.ejemplo.find()
	
##### Ese resultado se puede guardar en una variebla para luego consultar por medio de una posicion que queramos obtener ( Imagina un Array con los datos y un Indice para utilizarlo para el contenido de la posicion )

	 var nombreDeLaVariable = db.NombreDeLaColeccion.find()

### Ejemplo
	 var array = db.ejemplo.find()
	
Para imprimir el Indice al cual queremos acceder utilizando la variable anterior haras lo siguiente:
	
	 printjson ( array [ 4 ] )
	
>>Donde **`array`** es la variable que utilizamos para guardar el resultado de la consulta y el numero dentro de los corchetes es el Indice al cual queremos acceder.
	 
	 
##  TIP !!!

###### Este comando imprime el contenido de una Carpeta en formato JSON
	$: db.NombreDeLaColeccion.pretty()

### Ejemplo con el comando `.find()`
	$: db.ejemplo.find().pretty()
	
**Esto nos ayudara a leer los resultados de una mejor manera el contenido de un documento o dentro de una base de datos.**

## FindOne 

#### Estructura

    db.ejemplo.findOne()

Este comando te muestra un documento al azar ya que no le agreamos ningun `argumento` para especificar la busqueda.

### Ejemplo `.find( con argumentos )`

    db.ejempli.findOne( { "_id": "ObjectId("50691737d386d8fadbd6b01d")" } )

>>En este ejemplo le agreamos los argumentos para hacer la busqueda de un `_id` especificamente y es lo que vamos a obtener, solo ese.

En caso de que querramos buscar varios documentos que tengan **una coincidencia** dependiendo del argumento que le pasemos al metodo se haria de la siguente manera

### Ejemplo

    db.ejemplo.find( { "nombre" : "Eric" } )

>>Asi retornara todo los "Usuarios" llamados **Eric**
>>>Hasta aqui siempre nos muestra todos los campos que contiene el documento, pero que tal si no queremos que nos muetre todo, que tal si solo queremos saber ciertas cosas, para este tipo de casos haremos lo siguiente.


>>>**db.ejemplo.find( { "nombre" : "Eric" } , `"apellido" : true , "edad" : false`  } )**
>>>
>>>De esta manera nos retornara todas las personas que tengan el nombre de **`Eric`** y el campo **`apellido`**
ya que es el unico que tiene el estado **`true`**.

# Remove

Este comando hace lo que dice, eliminar el documento que especifiquemos.

>**Recuerda tener cuidado ya que si no especificas el `documento` en la consulta, eliminaras todo.**

### Ejemplo

    db.products.remove( { "_id": "ObjectId("50691737d386d8fadbd6b01d")" } )

# Operadodes 
>(Actualizare a medida que entienda un poco mas y sea lo suficiente claro para explicarlo)

    



