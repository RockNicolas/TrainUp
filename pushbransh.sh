#!/bin/bash

# Obter a branch atual
current_branch=$(git rev-parse --abbrev-ref HEAD)
echo "Branch atual: $current_branch"

# 1. Solicitar mensagem de commit
read -p "Informe a mensagem do commit: " commit_message

# 2. Verificar se vai criar uma nova TAG
read -p "Deseja criar uma nova TAG (s ou n)? " create_tag
if [ "$create_tag" = "s" ]; then
    read -p "Informe o nome da TAG: " tag_name
fi

# 3. Exibir status e informações da branch
git status
git branch

# 4. Adicionar e fazer commit
git add .
git commit -am "$commit_message"

# 5. Se optar por criar uma nova TAG, criar a tag
if [ "$create_tag" = "s" ]; then
    git tag "$tag_name"
fi

# 6. Push para o repositório remoto
git branch
git push -u origin "$current_branch" --tags

# Perguntar se deseja continuar para criar PR
read -p "Deseja continuar para criar PR (s ou n)? " push_continue_process
if [ "$push_continue_process" != "s" ]; then
    echo "Processo interrompido."
    exit 0
fi

# 7. Criar Pull Request
echo "Criando PR..."
pr_create_output=$(gh pr create --fill --head "$current_branch" --base main)
echo "$pr_create_output"

# Capturar o ID da PR
pr_id=$(echo "$pr_create_output" | awk -F'/' '{print $NF}')
echo "ID da PR: $pr_id"

# Perguntar se deseja continuar para fazer merge
read -p "Deseja continuar para fazer merge da PR (s ou n)? " continue_process
if [ "$continue_process" != "s" ]; then
    echo "Processo interrompido."
    exit 0
fi

# 8. Merge da PR
gh pr merge "$pr_id" --rebase --delete-branch

# 9. Comentar na PR
gh pr comment "$pr_id" --body "Esta PR foi rebased com sucesso! Branch foi deletada. | Obrigado pela contribuição!"

# 10. Atualizar o repositório local
git checkout main
git status
git pull

# 11. Criar nova branch
read -p "Qual o nome da nova Branch? " new_branch_name
git checkout -b ts$(date +%s)-"$new_branch_name"

echo "Script concluído com sucesso. Você está agora na branch: $(git rev-parse --abbrev-ref HEAD)"