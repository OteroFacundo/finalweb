# Proyecto-TPIntegrador

## Alumnos: Otero Facundo y Nardoni Valentin 

## Introducción

Este documento corresponde a la propuesta de proyecto final para la materia “Programación en Ambiente Web”.
El sitio consiste en una página web para el dueño de una quinta la utiliza en forma de alquiler para
distintos eventos.
Contendora toda la información asociada a la quinta para que los visitantes interesados en el
alquiler puedan enterarse de todo lo que se ofrece.
El dueño podrá administrar las reservas que se realizan por el sitio, pudiendo asítener un control
de ellas y así también, los visitantes, observar los días disponibles que se encuentran.

## Secciones

El sitio tendrá su Home principal, donde se visualiza principalmente un carrete con algunas
imágenes principales de la quinta, información principal que el usuario desearía saber.
Continuando con opiniones de personas que hayan visitado el lugar, un map al estilo Google maps
mostrando la ubicación e información de contacto como dirección.
El home al igual que todas las secciones tendrá la barra de navegación ubicada en la parte superior
de la pantalla, al igual que los botones de login y registro.
La sección galería tendrá todas las fotos de la quinta.
En la sección contacto se mostrará el mapa donde se encuentra la quinta, información acerca de
ella y los contactos para comunicarse con el dueño.
La sección eventos, estarán los eventos que se realizaron, los usuarios asociados a esos eventos
podrán subir imágenes y configurar algunas opciones del mismo.
La sección “Presupuesto” tendrá un calendario que muestra los días donde la quinta estará
disponible, como los días en la quinta ha sido alquilada, donde cualquier usuario visitante podrá
visualizar. Junto a esto, habrá campos para llenar en caso de querer pedir un presupuesto, en caso
de querer pedir un presupuesto el usuario debe estar registrado y logueado en el sitio.

## Usuarios

El Sistema permitirá los siguientes modos de usuario:
Modo Invitado: Cualquier usuario que ingrese al sitio estará en este modo, que le permitirá
observar el contenido de todas las secciones, ver el calendario de reservas, pero no realizarlas.
Modo Usuario: En este modo los visitantes que estén registrados y luego hayan ingresado podrán
al igual que el modo invitado, visualizar el contenido. Además, podrán realizar enviar el formulario
de presupuesto que se encuentra en dicha sección.
Modo Administrador: El dueño administrador del sitio, podrá tener este modo, que le permitirá
manejar los pedidos de presupuesto que le llegan, pudiendo dejar le presupuesto sin acción
alguna o asignarlo como evento.


## Sobre el funcionamiento

Los presupuestos solicitados por usuarios logueados, quedan registrados en el sistema, luego de
acordar con el dueño y confirmar la reserva, este ultimo acepta el presupuesto registrándolo como
evento que queda asociado al usuario que lo solicito. Por el contrario, si el usuario y el dueño no
llegan a un acuerdo, no se asigna como evento al presupuesto.
Una vez registrado el evento, se asignará en el calendario las fechas de dicho evento como no
disponible y no van a poder ser seleccionadas por usuarios para pedir presupuesto.
Una vez pasada la fecha del evento, el Usuario Administrador tiene la opción de que el evento
aparezca en la sección “Eventos” si este lo amerita, cuando sea un evento de tipo cumpleaños,
bautismo, casamiento, o algún evento de esas características y no una reserva para pasar el dia o
fin de semana con la familia.
De ser asi, el Usuario que pidió el presupuesto, asociado al evento que se encuentra en dicha
sección tiene la opción de subir imágenes, calificar el lugar, recibir comentarios de otros usuarios,
entre otras opciones.
Los Usuarios registrados tendrán un registro de todas las reservas que hizo, la calificación de cada
una de ellas.