# 2023-02-14 17:10
Pues esta es la versión 0.6 del proyecto, la verdad es que me mosqueó tener que rehacer la parte de los logs.
Cosas que pasan, vamos a mejorar eso desde el principio y a rehacer el codigo un poco.

Tareas:

- Alta
	- index.php
	- FrontController
	- Fichero de lengauje
	- Home
	- PhP Blog
- Media
	- M7 UF1
		- E01
		- E04

## 19:32 - 19:57
Tareas:

- Alta
	- LangController
	- ErrorView
	- FrontController
	- Fichero de lengauje
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
		
# 2023-02-15 2:20
Seguimos intentando crear las clases minimas necesarias para que la web se muestre minimamente.

Tareas:

- Alta
	- LangController
	- ErrorView
	- FrontController
	- Fichero de lengauje
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
- Baja
	- Controller
		- Sanitize
		
## 2:59
Las primeras clases ya estan creadas de tal manera que al mostrar los errores no sale ningun mensaje de error.
Las prioridades han cambiado un poco.

Tareas:

- Alta
	- FrontController
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
		
# 2023-02-16 15:42
Seguimos trabajando en los objetivos anteriores.

Tareas:

- Alta
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- Home
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

## 16:01
Hehos los primeros templates y la vista de home, falta editar todos los tmplts.

Tareas:

- Alta
	- Tmplts
		- Aside
		- End
		- Error
		- Head
		- Header
		- Home
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

## 16:11
Vamos a ir haciendo tmplts.

Tareas:

- Alta
	- Tmplts
		- Aside
			- Recursos
	- HomeView
		- Añadir contenido
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- getMenu()
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
		
## 17:17
Actualizacion de MenuController, de momento da el menu entero.
Lo siguiente que voy a hacer es el contenido del home;

Tareas:

- Alta
	- Tmplts
		- Aside
			- Recursos
	- HomeView
		- Añadir contenido
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

# 2023-02-17 17:48
Los objetivos más importantes para hoy son los siguientes:
Arreglar el apartado de destacados del home.
Hacer todas las practicas de M7 que dependan de la base de datos para poder hacer el M7 UF2 E06. 

Tareas:

- Alta
	- HomeView
		- Añadir contenido
			- Destacados
	- M7 UF1 E08
	- M7 UF2
		- E02 (Necesito M7 UF1 E08)
		- E03
	- M7 UF2 E06
	- Tmplts
		- Aside
			- Recursos
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
		
Al lio.

## 19:44
Home actualizado y funcionando de manera normal, falta diseño y añadir alguna caracteristica.
Vamos a hacer las practicas necesarias para poder hacer la M7 UF2 E06.

Tareas:

- Alta
	- M7 UF1 E07
	- M7 UF1 E08 (Necesita M7 UF1 E07)
	- M7 UF2
		- E02 (Necesito M7 UF1 E08)
		- E03
	- M7 UF2 E06 (Necesita M7 UF2 E03 Y E04)
	- Tmplts
		- Aside
			- Recursos
	- FrontController
		- Si es un get con parametros
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
		
## 19:52
Para hacer las practicas necesito arreglar el FrontControlle::dispatch.

Tareas:

- Alta
	- FrontController
		- Si llega un get con parametros 
	- M7 UF1 E07
	- M7 UF1 E08 (Necesita M7 UF1 E07)
	- M7 UF2
		- E02 (Necesito M7 UF1 E08)
		- E03
	- M7 UF2 E06 (Necesita M7 UF2 E03 Y E04)
	- Tmplts
		- Aside
			- Recursos
	- FrontController
		- Si es un post
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
		
## 21:16
He arreglado el front controller con GET pero para esta practica necesito arreglar el del POST

Tareas:

- Alta
	- FrontController
		- Si llega un post con parametros 
	- M7 UF1 E07
	- M7 UF1 E08 (Necesita M7 UF1 E07)
	- M7 UF2
		- E02 (Necesito M7 UF1 E08)
		- E03
	- M7 UF2 E06 (Necesita M7 UF2 E03 Y E04)
	- Tmplts
		- Aside
			- Recursos
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

# 2023-02-19 16:42
Seguimos con las taraes de ayer.
He arreglado el front controller para que coja los parametros del post y se los pase a la funcion correspondiente.
Seguimos haciendo la practica M7 UF1 E07 que me falta solo la persistencia.

Tareas:

- Alta
	- M7 UF1 E07
	- M7 UF1 E08 (Necesita M7 UF1 E07)
	- M7 UF2
		- E02 (Necesito M7 UF1 E08)
		- E03
	- M7 UF2 E06 (Necesita M7 UF2 E03 Y E04)
	- Tmplts
		- Aside
			- Recursos
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

Al lio.

## 17:35
Practica M7 UF1 E07 lista
voy a hacer un commit y seguimos con las demas

Tareas:

- Alta
	- M7 UF1 E08
	- M7 UF2
		- E02 (Necesito M7 UF1 E08)
		- E03
	- M7 UF2 E06 (Necesita M7 UF2 E03 Y E04)
	- Tmplts
		- Aside
			- Recursos
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize

Seguimos con M7 UF1 E08 Formulario de registro.

# 2023-02-20 18:20
Practica M7 UF1 E08 lista.
Se me ha olividado apuntar que no he hecho la parte de la validacion de los datos tanto de esta como de la anterior.
Me los pondre como todos de baja prioridad y voy a continuar con la siguiente practica.

Tareas:

- Alta
	- M7 UF2
		- E02 (Necesito M7 UF1 E08)
		- E03
	- M7 UF2 E06 (Necesita M7 UF2 E03 Y E04)
	- Tmplts
		- Aside
			- Recursos
	- PhP Blog
	- Pagina que muestra la conexión de las aulas del instituto
- Media
	- M7 UF1
		- E01
		- E04
	- LangController
		- showLangs()
	- MenuController
		- Pagina para modulos (depende de la logica del contenido del Home)
			- Pagina par ufs
				- Menus parciales
	- Fichero de lengauje
- Baja
	- Controller
		- Sanitize
	- M7 UF1 E07
		- Validacion de datos
	- M7 UF1 E08
		- Validación de datos

Voy a hacer commit y seguimos.