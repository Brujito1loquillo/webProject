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

### U1.1.5
Bueno... hice un push, ¿Conclusión preeliminar? Creo que _local/master_ no esta bien asociada con _origin/main_ y se crea la rama nueva cuando hago un push, voy a mirar a ver por que sucede esto.