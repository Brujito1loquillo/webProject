# Web Project
Este es mi proyecto web que mostrara las practicas del curso y alguna cosa más esencial.
Este proyecto empieza en Septiembre de 2022 y va por su sexta actualización.
La intención de esta actualización es arreglar los logs y mejorar un poco la estetica.

## Indice de Contenidos
- Indice
- Logs
- Lengua

### Indice
Es el unico acceso a la web, todas las peticiones pasan por este fichero.
Implementa el patron FrontController que eligue el contenido que se mostrara en la web.
Tiene una función que carga las clases necesarias en cada momento de manera dinamica.
Hace el control final de errores.

### Logs
En este apartado veremos una logica de modelo y objeto de negocio que guardara información de lo que pasa en la web.
Esta compuesta de las clases LogModel y Log.

### Lengua
En este apartado veremos una logica que se encargara de cargar el fichero del lenguaje que tengamos seleccionado o de asignarnos un lenguaje y cargarlo.
