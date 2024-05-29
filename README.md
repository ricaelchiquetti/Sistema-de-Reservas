# Sistema de Reservas

## Descrição
O Sistema de Reservas é uma aplicação web desenvolvida em Laravel destinada a gerenciar reservas de recursos diversos. Este projeto facilita a administração de reservas, permitindo aos usuários visualizar, criar, editar e cancelar reservas de maneira eficiente.

## Instalação

### Usando Docker

1. Clone o repositório:
    ```bash
    git clone https://github.com/ricaelchiquetti/Sistema-de-Reservas.git
    cd Sistema-de-Reservas
    ```

2. Configure as variáveis de ambiente:
    ```bash
    cp .env.example .env
    ```

3. Configure o arquivo `.env` conforme necessário.

4. Inicie os containers Docker:
    ```bash
    docker-compose up -d
    ```

5. Acesse o container da aplicação e execute as migrações:
    ```bash
    docker-compose exec app bash
    php artisan migrate
    ```

### Usando PHP e Node.js

1. Clone o repositório:
    ```bash
    git clone https://github.com/ricaelchiquetti/Sistema-de-Reservas.git
    cd Sistema-de-Reservas
    ```

2. Instale as dependências do PHP e do Node.js:
    ```bash
    composer install
    npm install
    ```

3. Copie o arquivo de exemplo `.env` e configure as variáveis de ambiente:
    ```bash
    cp .env.example .env
    ```

4. Gere a chave da aplicação:
    ```bash
    php artisan key:generate
    ```

5. Configure o banco de dados no arquivo `.env` e execute as migrações:
    ```bash
    php artisan migrate
    ```

6. Execute o servidor local:
    ```bash
    php artisan serve
    npm run dev
    ```

## Uso
Após instalar e configurar o projeto, você pode acessar o sistema de reservas através do navegador no endereço `http://localhost:8000`.

### Funcionalidades Principais:
- **Criar Reservas:** Permite aos usuários criar novas reservas.
- **Visualizar Reservas:** Lista todas as reservas existentes.
- **Editar Reservas:** Possibilita a edição de reservas já cadastradas.
- **Cancelar Reservas:** Função para cancelar reservas.

## Contribuição
Contribuições são bem-vindas! Siga os passos abaixo para contribuir:
1. Faça um fork do repositório.
2. Crie uma branch para sua feature ou correção:
    ```bash
    git checkout -b minha-feature
    ```
3. Commit suas alterações:
    ```bash
    git commit -m 'Adiciona minha nova feature'
    ```
4. Envie para o repositório remoto:
    ```bash
    git push origin minha-feature
    ```
5. Abra um Pull Request.

## Licença
Este projeto está licenciado sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## Autores
- Ricael Chiquetti - [GitHub](https://github.com/ricaelchiquetti)

