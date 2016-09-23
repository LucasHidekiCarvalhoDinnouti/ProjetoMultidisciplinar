# ProjetoMultidisciplinar
16166_16174_16185

(1) baixar o portable git e copiar para o pendrive
(2) executar o git-bash.exe
(3) configurar o home para o pendrive: 
home=/d (se o seu pendrive for o "D:/")
(4) gerar chave ssh:
ssh-keygen -t rsa
(não clolque senha após isso, apenas Enter
 as chaves serao geradas em "/D/.ssh/" )
(5) colocar o conteudo do arquivo "/D/.ssh/id_rsa.pub" para uma nova chave no github:
seção -> your Profile -> edit Profile -> SSH and GPG keys
(6) clonar o repositorio com o comando:
git clone git@github.com:LucasHidekiCarvalhoDinnouti/ProjetoMultidisciplinar.git
Se tudo der certo, isso criará uma pasta "ProjetoMultidisciplinar"
