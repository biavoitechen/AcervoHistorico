# Acervo Histórico – Catálogo de Curiosidades

Projeto desenvolvido em PHP como catálogo digital de curiosidades e obras históricas, permitindo navegação pública e área protegida com funcionalidades administrativas.

---

## Sobre o projeto

Este sistema apresenta um acervo de curiosidades históricas em formato digital. O visitante pode visualizar informações completas sobre cada item, aplicar filtros por categoria e, caso esteja logado, adicionar novas obras ao acervo. O projeto simula um museu virtual.

---

## Tecnologias utilizadas

- PHP 
- HTML + CSS 
- Controle de sessão com `password_hash()` e `password_verify()`
- Ambiente local com XAMPP

---

Funcionalidades

### Visitante:
- Visualiza lista de curiosidades históricas (index.php)
- Filtra itens por categoria (filtrar.php)
- Acessa página de detalhes com imagem e descrição (detalhes.php)

### Usuário logado:
- Acessa área protegida (protegido.php)
- Adiciona novas curiosidades via formulário
- Novos itens são exibidos imediatamente no catálogo
- Pode sair da conta com botão "Sair" (logout.php)

---

## Como acessar a área protegida

Para acessar a área administrativa (protegida), utilize os seguintes dados no formulário de login:

- **Página de login:** [Clique aqui para acessar o login »](http://localhost/AcervoHistorico/login.php)
- **Usuário:** `bia`  
- **Senha:** `segredo123`

Ao entrar com sucesso, você poderá:

- Cadastrar novas curiosidades históricas  
- Ver o botão "Área Protegida" no topo do site  
- Usar o botão "Sair" para logout seguro

---
