# Acervo Histórico – Catálogo de Curiosidades

Sistema desenvolvido em **PHP** como catálogo digital de curiosidades e obras históricas, com navegação pública e área protegida com funcionalidades administrativas.

---

## Sobre o projeto

Este sistema apresenta um acervo de **curiosidades históricas** em formato digital.  
O visitante pode visualizar informações completas sobre cada item, aplicar **filtros por categoria** e, caso esteja logado, **adicionar novas obras** ao acervo. O projeto simula um **museu virtual** com foco em acessibilidade e organização.

---

## Tecnologias Utilizadas

- **PHP** (estrutura principal)
- **HTML + CSS + Bootstrap** (interface responsiva)
- **Controle de Sessão** com `password_hash()` e `password_verify()`
- **XAMPP** (servidor local)
- **Git + GitHub** (controle de versão e colaboração)

---

## Funcionalidades

### Visitantes:
- Visualizam o catálogo completo (`index.php`)
- Filtram itens por categoria (`filtrar.php`)
- Acessam detalhes das obras (`detalhes.php`)
- Visual elegantes e responsivo com Bootstrap

### Usuário logado:
- Acessa **área protegida** (`protegido.php`)
- Cadastra novas curiosidades via formulário
- Novas obras são exibidas **imediatamente** no catálogo (armazenadas em sessão)
- Pode sair com o botão `Sair` (`logout.php`)
- Vê os botões dinâmicos no topo do site: `Área Protegida` e `Sair`

---

## Como acessar a Área Protegida

Para acessar a área administrativa, use:

- **Usuário:** `bia`  
- **Senha:** `segredo123`

---

## Extras implementados

- Layout totalmente responsivo com **Bootstrap**
- Título com ícone personalizado
- Imagens centralizadas, com bordas e sombras
- Texto das descrições formatado com **justificação e parágrafo estilo ABNT**
- Feedback visual em mensagens de erro (login)
- Navegação dinâmica com base na sessão (Login / Área Protegida / Sair)

---

## Estrutura dos principais arquivos

```bash
Catalogo/
│
├── index.php              # Página inicial com catálogo
├── detalhes.php           # Detalhes da obra
├── filtrar.php            # Página com filtro por categoria
├── login.php              # Formulário de login
├── protegido.php          # Área administrativa protegida
├── logout.php             # Encerra a sessão
│
├── includes/
│   ├── cabecalho.php      # Cabeçalho com navbar
│   └── rodape.php         # Rodapé comum
│
├── dados.php              # Array com as obras e suas descrições
├── funcoes.php            # Funções auxiliares
└── README.md              # Este arquivo
