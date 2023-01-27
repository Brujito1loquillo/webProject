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

## U1.1.1
No funciona... lamentablemente.
me da una información cuando lo ejecuto de mis posibilidades para poder hacer eso que quiero las cuales no me parecen lo que busco, no es que quiera que mi rama local se llame _main_, quiero que se mantenga el nombre de _master_ en local. La otra opcion que me da es cambiar de rama remota y crear una nueva que si se llamaria _master_ pero entonces tendria dos ramas y no es lo que busco.
Voy a buscar la manera de asociar mi rama local con una rama remota de nombre diferente.
