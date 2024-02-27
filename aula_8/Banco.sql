# 1° Criar o banco de dados, se não existir
create database if not exists parking_lot_sao_leopoldo_morning;
# 2° Usar/selecionar o banco de dados
use parking_lot_sao_leopoldo_morning;
# 3° Criar as tabelas do banco
create table if not exists clients(
	cpf char(14) primary key,
    fullname varchar(45) not null,
    phone char(15) not null,
    status tinyint unsigned not null
);
create table if not exists parking_lot(
	number tinyint unsigned primary key,
    situation varchar(10) not null,
    status tinyint unsigned not null
);
create table transactions(
	id int unsigned primary key auto_increment,
    license_plate char(8) not null,
    vehicle_brand varchar(45) not null,
    vehicle_model varchar(50) not null,
    vehicle_color varchar(50) not null,
    entry_time time not null,
    departure_time time null,
    amount_paid decimal(5,2) null,
    client char(14) not null,
    parking_lot_number tinyint unsigned not null,
    status tinyint unsigned not null,
    constraint fk_client foreign key (client) references clients(cpf),
    constraint fk_parking_lot_number foreign key (parking_lot_number) references parking_lot(number)
);
