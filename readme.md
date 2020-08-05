Para instalação desse repositório são necessárias as seguintes ações:

- Abra seu GitBash ou similar na pasta aonde deseja clonar o repositório.
- Digite o seguinte comando no GitBash : [git https://github.com/sebet89/teste_laravel.git] .
- Assin que o repositório terminar de baixar dê o próximo comando: [composer update].
- Depois Copie o arquivo .env.example e renomeie para .env.
- Crie seu banco de dados.
- Configure seu arquivo .env com os dados do seu host.
- Gerar a Key com o comando [php artisan key:generate].
- Logo após dê o comando no GitBash : [php artisan migrate].
- E então o comando : [php artisan db:seed].
- Então Crie o Virtual Host.
- Acesso padrão user: admin@admin e pass: admin e mãos a obra.

## Licença

Lisença:  [MIT license](https://opensource.org/licenses/MIT).
