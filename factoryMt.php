// Classe abstrata Transporte
abstract class Transporte {
    abstract public function entregar();
}

// Subclasses concretas de Transporte
class Caminhao extends Transporte {
    public function entregar() {
        echo "Entregando por caminhão\n";
    }
}

class Aviao extends Transporte {
    public function entregar() {
        echo "Entregando por avião\n";
    }
}

class Navio extends Transporte {
    public function entregar() {
        echo "Entregando por navio\n";
    }
}

// Interface ou classe abstrata para a fábrica de transporte
interface TransporteFactory {
    public function criarTransporte(): Transporte;
}

// Implementação da fábrica de transporte para cada tipo
class CaminhaoFactory implements TransporteFactory {
    public function criarTransporte(): Transporte {
        return new Caminhao();
    }
}

class AviaoFactory implements TransporteFactory {
    public function criarTransporte(): Transporte {
        return new Aviao();
    }
}

class NavioFactory implements TransporteFactory {
    public function criarTransporte(): Transporte {
        return new Navio();
    }
}

// Exemplo de uso do Factory Method
function clienteTransporte(TransporteFactory $factory) {
    $transporte = $factory->criarTransporte();
    $transporte->entregar();
}

// Uso do Factory Method para criar e usar transportes
clienteTransporte(new CaminhaoFactory()); // Saída: Entregando por caminhão
clienteTransporte(new AviaoFactory());    // Saída: Entregando por avião
clienteTransporte(new NavioFactory());    // Saída: Entregando por navio
