<p align="center">
  <img src="https://github.com/Denngrh/Barber-ujikom/assets/112230212/83986cfc-2397-42fd-9626-06a9df793476" alt="Logo-Barber" style="width: 100px;">
</p>
   <div align="center">
    <table>
        <th><img alt="GitHub release (latest by date)" src="https://img.shields.io/github/v/release/Denngrh/Barber-ujikom"></th>
        <th><img alt="GitHub repo size" src="https://img.shields.io/github/repo-size/Denngrh/Barber-ujikom"></th>
        <th><img alt="GitHub" src="https://img.shields.io/github/license/Denngrh/Barber-ujikom"></th>
        <th><img src="https://img.shields.io/badge/Programing%20Language-php-blue" alt="programing"></th>
    </table>
   </div>
   
## :iniciante: Sobre
O site Lily Putra Barbershop é um site utilizado para ajudar a encontrar o local certo para fazer a barba, o objetivo inicial é exibi-lo no Google Maps que foi desenvolvido com diversos recursos.
## :ledger: Fitur-Fitur
- Administrador
    - Adicionando serviços
    - Gerenciar serviço
    - Atualizações sobre nós
    - Atualizações de localização
    - Atendimento ao Cliente
    - Faturas (impressas)
- Usuários
    - Contato
    - Histórico de faturas (imprimir)
    - Atualizar perfil
- Login-Registro-Verificação
- reserva (processo)

##  :file_folder: Estrutura do arquivo
```
Barber
├── admin/
    ├── assets/
    |      |── css/
    |      |── img/
    |      ├── js/
    |      ├── scss/ 
    |      └── vendor/
    ├── inc/     
    └── index.php 
├── assets/
        |── img/
        |── js
        └── css
├── Database/
├── error/
├── inc/
├── PHPmailer/
        |── language/
        └── src/
├── proses/
├── user/
    ├── assets/
    |      |── img/
    |      |── js 
    |      └── css
    ├── inc/     
    └── index.php 
├── index.php
├── login.php
└── Logout.php
```
## :electric_plug: Instalação
Consulte o guia de instalação do código-fonte do aplicativo do sistema de barbeiro de cabelo abaixo

- Instale o XAMPP
- Abra o XAMPP e inicie [apache] e [mysql]
- baixe o código-fonte com clone zip/git
- Extraia em C:\xampp\htdocs.
- abra o link localhost/phpmyadmin em um mecanismo de busca (Chrome, Firefox, etc.)
- clique em novo na seção de navegação lateral da página inicial do phpmyadmin
- clique em importar na barra de navegação
- procure o arquivo na pasta do banco de dados, o nome é barber.sql
- abra um mecanismo de busca, digite http://localhost/foldername
- Detalhes de login do administrador = <br>
 -> Nome de usuário: admin
  -> senha: 200512
- Detalhes de login do usuário = <br>
 -> Registre-se primeiro
		
##  :lock: License
[MIT license](https://opensource.org/licenses/MIT)
