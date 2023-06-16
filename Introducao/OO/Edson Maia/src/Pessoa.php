<?php 

require_once "index.php";



    class Pessoa 
    {
        //Atributos, características = 
        private string $nome;
        private int    $idade;

        // public - pode ser alterado por qualquer um
        // private - só pode ser alterado pela classe istancia (classe pai)
        // protect - pode ser alterado pela super-classe e pela sub-classe (Classe pai e as herdadas)

        // class (método) public - pode ser chamado por qualquer um
        // class (método) private - só pode ser chamado pela classe istancia (classe pai)
        // class (método) protect - pode ser chamado pela super-classe e pela sub-classe (Classe pai e as herdadas)






        // Métodos, Comportamentos = funções
        public function __construct(string $nome, int $idade)
        {  
            $this->nome = $nome;
            $this->idade = $idade;
            $this->validaIdade($idade);
        }
        



        //                     ACESSORES 
        // são métodos que dãoa acesso.
        // são usados para alterar valores de forma mais segura

        // GET = pegar     &      SET = setar, editar

        //  - ---------- GET -----------  - 
        // A estrutura de código abaix serve para pegarmos valores de classe não públicas;
        public function getNome()
        {
            return $this->nome;
        }
        
        public function getIdade()
        {
            return $this->idade;
        }


        // - ---------- SET -----------  - 
        public function setNome(string $nome)
        {
             $this->nome = $nome;
        }

        public function setIdade(int $idade)
        {
             $this->idade = $idade;
        }




        // MÉTODO ESPECÍFICO ---
        public function validaIdade(int $idade)
        {
            if ($this->idade > 0 AND $this->idade < 120){
                $this->idade = $idade;
            } else {
                echo "Idade não permitida";
                exit;
            }
        }



    }   
    





?>