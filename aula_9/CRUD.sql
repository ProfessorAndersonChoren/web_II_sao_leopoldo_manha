# 1° Conectar ao banco
use parking_lot_sao_leopoldo_morning;
# Inserção de registros
insert into clients(cpf,fullname,phone,status) values ('592.504.190-90','Juliana Marli Duarte','(51) 98765-4321',1); # 1 - Ativo / 0 - Inativo
insert into clients values ('727.945.710-01','Tatiane Carla Emanuelly Ramos','(51) 99918-1539',1); # 1 - Ativo / 0 - Inativo
insert into parking_lot values (10,'Disponível',1);
insert into transactions values (null,'LVM-6994','Kia Motors','Sportage DLX 2.0 16V Aut.','Cinza','14:00:00','19:00:00',40,'592.504.190-90',10,1);

# Consulta simples
select fullname,phone from clients;

#Atualizar o telefone
update clients set phone = '(51) 99629-2251' where cpf = '592.504.190-90';

# Consulta com junção
select tr.*,c.fullname from transactions tr
inner join clients c on tr.client = c.cpf;

# Consulta com Filtros e Ordenação
select * from transactions t where t.departure_time > '18:00:00' order by t.departure_time desc;

#Atualização de Status de Vaga
update parking_lot set situation = 'Ocupado' where number = 10;
insert transactions values (null,'MZE-5906','Toyota','Hilux CD 4x4 2.7 16V Flex Mec.','Branco','10:00:00','12:00:00',16,'727.945.710-01',10,1);
update parking_lot set situation = 'Disponível' where number = 10;

# Relatório de Receitas
select sum(amount_paid) as 'Receita total' from transactions;

# Consulta de Vagas Disponíveis
select distinct lot.number from transactions t
inner join parking_lot lot on t.parking_lot_number = lot.number where situation = 'Disponível';

# Remoção de Dados
delete from transactions where id = 1; # Usem com moderação
