 = "# API - Laravel

API para gerenciamento de **Funcionários** e **Departamentos** com relações entre eles.
php artisan serve

##  Endpoints
#### Tive problemas no arquivo routes/api.php
pois o meu gerou sem ele, optei por boa pratica colocar o prefixo

### Funcionários

| Método | Rota                         | Descrição                  |
|--------|------------------------------|----------------------------|
| GET    | /api/funcionarios            | Listar todos               |
| POST   | /api/funcionarios            | Criar                      |
| GET    | /api/funcionarios/{id}       | Buscar por ID              |
| PUT    | /api/funcionarios/{id}       | Atualizar                  |
| DELETE | /api/funcionarios/{id}       | Deletar                    |
| GET    | /api/funcionarios/{id}/departamento | Departamento do funcionário |

### Departamentos

| Método | Rota                               | Descrição                        |
|--------|------------------------------------|----------------------------------|
| GET    | /api/departamentos                 | Listar todos                     |
| POST   | /api/departamentos                 | Criar                            |
| GET    | /api/departamentos/{id}           | Buscar por ID                    |
| PUT    | /api/departamentos/{id}           | Atualizar                        |
| DELETE | /api/departamentos/{id}           | Deletar                          |
| GET    | /api/departamentos/{id}/funcionarios | Funcionários do departamento  |

##  CSRF
Tive problemas com esse token tambem por alguma coisa da versao

## Autor

Feito com por David Lino 1989325
