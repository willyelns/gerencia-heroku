class Controller{

    protected $session;

    /**
    * Método construtor
    * @access public
    * @return void
    */
    public function __construct(){
        Session::inicializar();
    }


    /**
    * Carrega uma View.
    * @access public
    * @param String $nome Nome da view a ser carregada.
    * @param Array $vars Array de dados a serem 'enviados' para a View.
    * @return Void
    */
    protected function loadView( $nome, $vars = null ){
        if( is_array($vars) && count($vars) > 0 ){
            extract($vars, EXTR_PREFIX_SAME, 'data');
        }
        $arquivo = VIEW_PATH . '/' . $nome . '.php';
        if ( !file_exists($arquivo) ){
            $this->erro("Houve um erro. Essa View {$nome} nao existe.");
        }
        require_once( $arquivo );
    }


    /**
    * Carrega um modelo.
    * @access public
    * @param String $nome Nome do modelo a ser carregado.
    * @param String $apelido 'Apelido' para o modelo
    * @return Void
    */
    protected function loadModel( $nome, $apelido = "" ){

        $arquivo = MODEL_PATH . '/' . $nome . '.php';

        if ( !file_exists($arquivo) ){
            $this->erro("Houve um erro. Esse Model {$nome} não existe.");
        }

        require_once( $arquivo );

        $classe_nome = ucfirst($nome);

        if ( class_exists($classe_nome) ){
            $this->$classe_nome = new $classe_nome();
            if( $apelido!="" ){                
                $this->$apelido =& $this->$classe_nome;
            }
        }else{
            $this->erro("A classe {$classe_nome} não foi encontrada no modelo {$nome}");
        }
    }


    /**
    * Dispara um erro.
    * @access protected
    * @param String $msg Mensagem do erro.
    * @return Void
    */
    protected function erro($msg){
        throw new Exception($msg);
    }

}