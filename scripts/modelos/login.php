<?php 
class Login {
    private string $cdUsuario;
    private string $senha;
    private string $tipoLogin;
    function __construct(string $cdUsuario, string $senha, string $tipoLogin) {
        $this->cdUsuario = $cdUsuario;
        $this->senha = $senha;
        $this->tipoLogin = $tipoLogin;
    }
    public function getCdUsuario() {
        return $this->cdUsuario;
    }
    public function getSenha() {
        return $this->senha;
    }
    public function getTipoLogin() {
        return $this->tipoLogin;
    }
}
?>