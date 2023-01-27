# 2023-01-27 - U1
Empiezo instalando ZSH para usarla como la terminal para todo lo relacionado con git.
Despues de esto instalo Git para poder usar los comandos en mi sistema
```bash
# apt-get install zsh -y
# apt-get install git -y
```

Targets de hoy:
- Poder vincular mi proyecto con este repositorio de git
- Crear el primer fichero de la web, que cargue y que se sincronize con git

## U1.1
Estaba siguiendo una [guia](https://www.sitereq.com/post/3-ways-to-create-git-local-and-remote-repositories) que nos pasó el profesor de *Despliegue de aplicaciones web*, asignatura del grado superior de desarrollo de aplicaciones web, el cual curso actualmente y me encontre el primer problema.
Resulta que no puedo hacer pull debido a que no hay una referencia remota a la rama *master* de mi proyecto en local.
Lo cual me hace recordar que en clase dijo el comando que habia que utilizar para sincronizar una rama local con una remota cuando no se llaman de la misma forma. Voy a buscar entre los apuntes.

```bash
$ git branch --set-upstream-to=[remot/branca-remota] [branca-local]
```

Vamos a provar.

### U1.1.1
No funciona... lamentablemente.
me da una información cuando lo ejecuto de mis posibilidades para poder hacer eso que quiero las cuales no me parecen lo que busco, no es que quiera que mi rama local se llame _main_, quiero que se mantenga el nombre de _master_ en local. La otra opcion que me da es cambiar de rama remota y crear una nueva que si se llamaria _master_ pero entonces tendria dos ramas y no es lo que busco.
Voy a buscar la manera de asociar mi rama local con una rama remota de nombre diferente.

### U1.1.2
Lo cierto es que me lo esperaba, resulta que antiguamente tu podias autentificarte mientras hacias un push, lo cual tiene sentido, resulta que ahora al sincronizar el origen tienes que poner tu usario y tu token, lo caul recuerdo que se hablo en clase y no se donde leches lo tendre apuntado.
Sigo con esto.


### U1.1.3
Lo cierto es que ni siquiera he buscado apuntes, busque en internet [este post](https://stackoverflow.com/questions/18935539/authenticate-with-github-using-a-token) donde decian que tenia que cambiar la url del origen. Lo he hecho y he puesto la url con usr y token.
Voy a intentar descargar lo que hay en el repo (Por cierto, estoy escribiendo desde GitHub, como es logico ya que no puedo escribir desde mi local pq no se subiria mi drama a internet instantaneamente...) y luego a subir todas las capturas para linkarlas a la guia y luego crear un nuevo fichero indice.

### U1.1.4
Noticias frescas, la cosa es que sufro de dislexia, lo cual no tiene mucha relevancia en la vida del 99.9999% de los mortales, pero resulta que la gran parte de mi vida se basa en escribir, tanto en mi vida social y hobbies, como en mi aprendizaje y profesión (esta tan hermosa de programar).
Adivinan quien es el genio que comu url del remoto puso https**::**//\[...], pues lo más seguro es que sí que lo hicieron.
El caso. una vez haces el _set-url_ del remoto CORRECTAMENTE... luego tienes que asociar las ramas con _git branch_. Pues ahora solo queda hacer pruebas de descarga y subida.
Si hay alguien en este planeta o fuera de el leiendo esto, desenme suerte.

### U1.2
Bueno... hice un push, ¿Conclusión preeliminar? Creo que _local/master_ no esta bien asociada con _origin/main_ y se crea la rama nueva cuando hago un push, voy a mirar a ver por que sucede esto.

### U1.2.1
Despues de hacer un _merge_ puedo escribir al fin desde mi sistema en local y estoy casi llorando.

### U1.2.2
Lo cireto es que puedo escribir desde mi sistema, me puedo bajar ficheros, todo Ok, pero no puedo subirlos, estoy llorando pero mal.

### U1.3
Pues lo cierto es que ya estoy tabajando desde mi eclipes, me falta averiguar unas cuantas cosillas, como de manera normal no voy a tener que hacer pulls, ya que siempre trabajare desde mi disco con linux (Parrot-OS) del pull me puedo olvidar un poco.
Pero para que se suban los cambios tendre que generar commits y pushes.
Solo he tardado como 2h en hacer esto, realmente 135 minutos segun Trello, osea que 2h y 15 mins en poder sincronizarlo todo para que funcione.

Vamos a por el objetivo 2, crear el index.php mas cutre de la historia pq tengo sueño ya y me voy a ir a dormir. Mañana creare un archivo donde explique todo lo que hay que hacer para que github te deje trabajar (Aunque no estoy muy seguro de que funcione al 100% si se trabaja desde cero, pero lo que mas me suene si que lo pondre) y esto lo voy a apuntar en todo.md.

### U1.4
Por cierto, tengo que cambiar el directorio de mi apache pq he cambiado de ruta del proyecto, divertidismo todo.

### U1.5
Pues ya he creado el index.php, cutre, pero funciona.
Tenia que crear el conf del sitio del apache, habilitar el nuevo puerto para esta web (para mantener las otras operativas sin tener que hacerme un DNS interno).
Lo cual para mi es mas que un abance para poder empezar a subir mis cosetes aqui e ir trabajando. Cierro mi sesision despues de 2h y media. Me voy a dormir que mañana tengo clase y tengo que hacer un monton de partituras para la banda y no voy a poder, me da a mi.
