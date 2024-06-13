// Interface comum para o usuário
interface UsuarioInterface {
    public function obterNome(): string;
}

// Implementação básica do usuário
class Usuario implements UsuarioInterface {
    protected $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function obterNome(): string {
        return $this->nome;
    }
}

// Decorator base
abstract class UsuarioDecorator implements UsuarioInterface {
    protected $usuario;

    public function __construct(UsuarioInterface $usuario) {
        $this->usuario = $usuario;
    }

    public function obterNome(): string {
        return $this->usuario->obterNome();
    }
}

// Decorator para adicionar autenticação
class AutenticacaoDecorator extends UsuarioDecorator {
    public function obterNome(): string {
        return "[Autenticado] " . parent::obterNome();
    }
}

// Decorator para adicionar logging
class LoggingDecorator extends UsuarioDecorator {
    public function obterNome(): string {
        $nome = parent::obterNome();
        error_log("Usuário acessou: " . $nome);
        return $nome;
    }
}

// Exemplo de uso
$usuario = new Usuario("João");

// Adicionando autenticação
$usuario = new AutenticacaoDecorator($usuario);

// Adicionando logging
$usuario = new LoggingDecorator($usuario);

// Usando o usuário decorado
echo $usuario->obterNome(); // Saída: [Autenticado] João
