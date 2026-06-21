CREATE TABLE `produto_parceiro`(
    `id_produto (FK)` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `id_parceiro (FK)` BIGINT NOT NULL
);
CREATE TABLE `parceiros`(
    `id_parceiro` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome_empresa` VARCHAR(50) NOT NULL,
    `logobigint` VARCHAR(255) NOT NULL,
    `cidade` VARCHAR(50) NOT NULL
);
CREATE TABLE `produtos`(
    `id_produto` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(50) NOT NULL,
    `descricao` VARCHAR(200) NOT NULL,
    `pagina_catalogo` INT NOT NULL,
    `id_categoria (FK)` BIGINT NOT NULL
);
CREATE TABLE `categorias`(
    `id_categoria` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `nome` VARCHAR(20) NOT NULL,
    `descricao` VARCHAR(200) NOT NULL
);
ALTER TABLE
    `produto_parceiro` ADD CONSTRAINT `produto_parceiro_id_produto (fk)_foreign` FOREIGN KEY(`id_produto (FK)`) REFERENCES `produtos`(`id_produto`);
ALTER TABLE
    `produto_parceiro` ADD CONSTRAINT `produto_parceiro_id_parceiro (fk)_foreign` FOREIGN KEY(`id_parceiro (FK)`) REFERENCES `parceiros`(`id_parceiro`);
ALTER TABLE
    `produtos` ADD CONSTRAINT `produtos_id_categoria (fk)_foreign` FOREIGN KEY(`id_categoria (FK)`) REFERENCES `categorias`(`id_categoria`);