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


BASE DE DATOS

create database mipizzeria1;
use mipizzeria1;

create table user(
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	username varchar(50),
	email varchar(255),
	password varchar(60),
	is_active boolean default 1,
	is_admin boolean default 0,
	created_at datetime
);


insert into user(name,lastname,username,email,password,is_active,is_admin,created_at) value("Admin","","admin","",sha1(md5("admin")),1,1,NOW());

create table country (
	id int not null auto_increment primary key,
	name varchar(200) not null
);

insert into country (name) value ("Argentina");
insert into country (name) value ("Chile");
insert into country (name) value ("Colombia");
insert into country (name) value ("España");
insert into country (name) value ("Mexico");


create table unit (
	id int not null auto_increment primary key,
	name varchar(200) not null
);

insert into unit (name) value ("Pieza");
insert into unit (name) value ("Kit");
insert into unit (name) value ("Juego");
insert into unit (name) value ("Caja");



create table category (
	id int not null auto_increment primary key,
	name varchar(200),
	short_name varchar(200),
	in_home boolean default 0,
	in_menu boolean default 0,
	is_active boolean default 0
);

insert into category (name,short_name,is_active) value ("Basico","basico",1);


create table product (
	id int not null auto_increment primary key,
	short_name varchar(20) ,
	name varchar(200) ,
	code varchar(200) ,
	description varchar(1000) ,
	offer_txt varchar(1000) ,
	image varchar(255),	
	link varchar(255),	
	is_featured boolean  default 0,
	is_public boolean  default 0,
	in_existence boolean  default 0,
	created_at datetime ,
	order_at datetime ,
	price float ,
	category_id int ,
	unit_id int ,
	/* for SEO */
	meta_title varchar(100),
	meta_description varchar(255),
	meta_keywords varchar(100),
	foreign key(unit_id) references unit(id),
	foreign key(category_id) references category(id)
);

/*create table product_image(
	id int not null auto_increment primary key,
	title varchar(200) not null,
	description varchar(1000) not null,
	image varchar(255),	
	image_id int not null,
	foreign key(image_id) references image(id)
);
*/

create table coupon (
	id int not null auto_increment primary key,
	name varchar(200),
	description varchar(1000),
	product_id int,
	val double,
	kind int default 1, /* 1.- precio, 2.- porcentaje */
	is_multiple boolean default 0,
	is_active boolean default 1,
	start_at date,
	finish_at date,
	created_at datetime,
	foreign key(product_id) references product(id)
);


create table product_view(
	id int not null auto_increment primary key,
	viewer_id int,
	product_id int,
	created_at datetime,
	realip varchar(16),
	foreign key (viewer_id) references user(id),
	foreign key (product_id) references product(id)
);

create table client (
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	email varchar(255),
	phone varchar(255),
	address varchar(255),
	password varchar(60),
	is_active boolean default 1,
	created_at datetime
);

create table paymethod(
	id int not null auto_increment primary key,
	short_name varchar(100),
	name varchar(200),
	is_active boolean default 0	
);

insert into paymethod(short_name,name) value ("bank", "Deposito Bancario"),("deliver", "Pago Contra entrega");


create table status (
	id int not null auto_increment primary key,
	name varchar(200)
);

insert into status (name) value ("Pendiente");
insert into status (name) value ("Pagado");
insert into status (name) value ("Cancelado");
/* 3 estados extra*/
insert into status (name) value ("Enviado");
insert into status (name) value ("Finalizado");



create table buy (
	id int not null auto_increment primary key,
	k varchar(20),
	code varchar(20),
	client_id int,
	coupon_id int,
	status_id int,
	created_at datetime,
	paymethod_id int,
	foreign key(paymethod_id) references paymethod(id),
	foreign key(coupon_id) references coupon(id),
	foreign key(client_id) references client(id),
	foreign key(status_id) references status(id)
);

create table buy_product(
	id int not null auto_increment primary key,
	buy_id int,
	product_id int,
	q int,
	foreign key(buy_id) references buy(id),
	foreign key(product_id) references product(id)
);


create table slide (
	id int not null auto_increment primary key,
	title varchar(200),
	image varchar(255),	
	is_public boolean default 0,
	position int,
	created_at datetime
);
/**
kind:
1- texto
2- entero
3- checkbox
4- reference
**/


create table configuration(
	id int not null auto_increment primary key,
	name varchar(100) not null unique,
	label varchar(200),
	kind int,
	val text,
	cfg_id int default 1
);

insert into configuration(name,label,kind,val) value ("general_main_title","Titulo Principal",1,"KATANA LITE");
insert into configuration(name,label,kind,val) value ("general_main_email","Email Principal",1,"tuemail@tudominio.com");
insert into configuration(name,label,kind,val) value ("general_country","Pais",1,"MX");
insert into configuration(name,label,kind,val) value ("general_coin","Moneda",1,"$");
insert into configuration(name,label,kind,val) value ("general_iva_txt","Impuesto Texto",1,"I.V.A");
insert into configuration(name,label,kind,val) value ("general_iva","Impuesto IVA (%)",2,16);
insert into configuration(name,label,kind,val) value ("general_img_default","Imagen Default",1,"res/img/default.png");
/* for bank */
insert into configuration(name,label,kind,val) value ("bank_titular","Titular de la cuenta",1,"");
insert into configuration(name,label,kind,val) value ("bank_name","Nombre del Banco",1,"");
insert into configuration(name,label,kind,val) value ("bank_account","Numero de Cuenta",1,"");
insert into configuration(name,label,kind,val) value ("bank_card","Numero de Tarjeta",1,"");

 


![WhatsApp Image 2019-06-03 at 11 10 37 AM](https://user-images.githubusercontent.com/34029227/58817057-77333280-85f0-11e9-97ed-a3e22a451b88.jpeg)



TAREAS

![ta1](https://user-images.githubusercontent.com/34029227/58816156-874a1280-85ee-11e9-8466-794a4eb71daf.PNG)
![ta2](https://user-images.githubusercontent.com/34029227/58816158-874a1280-85ee-11e9-8c74-d18608b12dec.PNG)
