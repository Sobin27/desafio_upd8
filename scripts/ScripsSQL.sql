-- Gerar um script SQL que a partir do ID do cliente, retorne todos os representantes que podem atendê-lo.
select r.name, r.cpf, r.phone, c2.state, c2.city from representatives r
inner join cities c2 on c2.id = r.city_id
inner join clients c ON r.city_id = c.city_id
where c.id = :id

-- Gerar um script SQL que retorne todos os representantes de uma determinada cidade.
select r.name, r.cpf, r.phone, c.state, c.city from representatives r
inner join cities c on c.id = r.city_id
where c.city = :city
