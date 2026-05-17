CREATE TABLE dispositivos (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(100),
    localizacao VARCHAR(100),
    status VARCHAR(20)
);

CREATE TABLE alertas (
    id SERIAL PRIMARY KEY,
    tipo VARCHAR(100),
    descricao TEXT,
    risco VARCHAR(20)
);