1. Planificación y requeriemintos:

Introducción
Visión General del Proyecto
En este proyecto se creará una página didáctica para el usuario en casa para que el mismo pueda ordenar productos y/o comida a su domicilio para unificar el mercado de servicios a domicilio en una sola página web dispuesta ofrecer diversidad de productos en diferentes lugares del país o del mundo. 
Como ya se ha mencionado, este proyecto tiene como objetivo desarrollar un aplicativo en formato web capaz de dar soporte a la gestión de pedidos de varias sucursales. Nuestro objetivo comprende desarrollar un sistema de gestión de pizzerías que permita automatizar parte del proceso generado por un cliente: ordenar su comida, facturarla, etc.
El módulo de gestión de pedidos está diseñado para contener la información de los pedidos que se encuentren activos mediante la utilización de una base de datos. Dentro de cada pedido se sabrá qué productos se ha elegido, y sus características. Además, existe la posibilidad de mantener y manejar la información de los productos ofertados y datos personales de los clientes. El administrador tiene la posibilidad de modificar toda esta información. Existirán al menos cuatro tipos de usuarios a saber:
Administrador: Administración de productos, mesas y facturas.
Camarero: Modificación de pedidos y atención de los mismos.
Cocinero: Atención de los pedidos, modificación del estado de cada pedido.
Cliente: Creación de pedidos.

Propósito
El propósito de este proyecto es unirlo a los demás proyectos relacionados a la entrega de productos y/o comida para crear una sola página web encargada de unificar el mercado de servicios a domicilio y expandirlo por todo el Ecuador o todo el mundo.
Referencias
Insertar referencias.
Requerimientos específicos
Requerimientos Generales
Requerimientos funcionales

-	Requerimientos de Sistema
Id	Nombre	Descripción
RV01	Diseño Amigable	Diseño limpio, minimalista y de fácil uso para el usuario.
RV02	Uso de una BD	Conexión a una base de datos para guardar datos del usuario  (Direcciones, lo más pepido, etc).
RV03	Mantenimiento	Mantenimiento de la página web (Mejorar el diseño o estructura de la página web o quitar errores de la misma).
RV04	GPS	El sistema debe estar conectado a una plataforma de GPS para el mapeo de los locales.
RV05	Informacio Util	Las Pizzerias deberán contar con una gestión de menú y promociones y     deberá tener la descripción de cada producto(ingredientes, porciones,etc)


-	Usuario Administrador
Id	Nombre	Descripción
RA01	Login	Permite ingresar a las opciones de administrador.
RA02	Ingresar Pizzeria	Se ingresan los datos de una pizzeria(Ubicacion, productos, precios, cantidades)
RA03	Ver Pizzeria	Permite visualizar el listado de Pizzerias agregadas al sistema.
RA04	Eliminar Pizzeria	Eliminar una Pizzeria del sistema por alguna razón exterior.
RA05	Buscar Producto	Permite la búsqueda de un producto por código o nombre.
RA06	Buscar Cliente	Permite la búsqueda de un cliente por nombre.
RA07	Eliminar/bloquear Cliente	Permite eliminar o bloquear la cuenta de un cliente.


-	Usuario Vendedor Pizzeria


Id	
Nombre	
Descripción
RV01	Login	Permite ingresar a las opciones del vendedor
RV02	Crear Producto	Permite crear un producto en el sistema, indicando nombre, código, precio costo, precio venta.
RV03	Modificar Producto	Permite la edición de un producto existente (modificar nombre, precios)
RV04	Eliminar producto	Permite eliminar un producto del listado de productos.
RV05	Crear Venta	Permite registrar una venta.
RV06	Modificar Venta	Permite modificar los datos de una venta (productos, precios)
RV07	Eliminar Venta	Permite anular o eliminar una venta registrada.
RV08	Generar Reporte de Venta	Muestra el listado de una venta en particular.
RV09	Generar Listado de Productos	Muestra el listado de productos.
RV10	Generar Listado de Productos más Vendidos	Muestra un listado de los productos más vendidos.
RV11	Ingresar modo pago	Permite ingresar modo de pago otorgado por la Pizzeria. 


-	Usuario Cliente

Id	Nombre	Descripción
RC01	Login	Permite ingresar a las opciones de vendedor.
RC02	Visualiar Pizzerias	Permite visualizar las pizzerias con su productos y promociones.
RC03	Crear pedido	Una vez el cliente haya consultado los productos.
RC04	Agregar Producto	Agregar producto al carrito.
RC05	Visualizar pedido	Siempre puede saber qué productos existen en el pedido y el costo de los mismos (unitario y en general, lo que se lleva gastado).
RC06	Modificar Pedido	Antes de enviar el pedido, se preguntará si todos los productos introducidos son los correctos, puesto que una vez confirmado ya no se tiene la posibilidad de modificarlo, sólo puede añadir más productos a su pedido.
RC07	Seguridad del pedido	El cliente pueda elegir la forma de entrega a domicilio con seguridad en el pedido ya que puede hablar con el conductor por y en su entrega.
RC08	Pago Pedido	Elegir la forma de pago entre las opciones: pago en metálico, pago con tarjeta de crédito o Pay-pal.
RC09	Idioma	Elegir el idioma que desee utilizar entre los idiomas disponibles .
RC10	Calificacion	Que el cliente pueda calificar el servicio que presta el negocio. 

DIAGRAMAS

![Diagrama_Clases](https://user-images.githubusercontent.com/34029227/58815936-27ec0280-85ee-11e9-916a-a7ae165967cf.png)
![usos_1](https://user-images.githubusercontent.com/34029227/58815937-27ec0280-85ee-11e9-945d-f78de0a8f414.png)
![usos_2](https://user-images.githubusercontent.com/34029227/58815938-27ec0280-85ee-11e9-856a-274805ca41b3.png)
![usos_3](https://user-images.githubusercontent.com/34029227/58815939-28849900-85ee-11e9-817c-f1258cad140c.png)
![usos_4](https://user-images.githubusercontent.com/34029227/58815940-28849900-85ee-11e9-85ef-8e7f6e42017f.png)
![usos_5](https://user-images.githubusercontent.com/34029227/58815942-28849900-85ee-11e9-9435-c668efa71e26.png)
![usos_6](https://user-images.githubusercontent.com/34029227/58815944-291d2f80-85ee-11e9-9469-f459488b714c.png)


TAREAS

![ta1](https://user-images.githubusercontent.com/34029227/58816156-874a1280-85ee-11e9-8466-794a4eb71daf.PNG)
![ta2](https://user-images.githubusercontent.com/34029227/58816158-874a1280-85ee-11e9-8c74-d18608b12dec.PNG)
