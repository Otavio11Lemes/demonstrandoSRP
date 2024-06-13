# Definição das interfaces
class EmailNotificavel:
    def enviar_email(self):
        raise NotImplementedError

class SMSNotificavel:
    def enviar_sms(self):
        raise NotImplementedError

class PushNotificavel:
    def enviar_push_notification(self):
        raise NotImplementedError

# Implementação da classe Usuario que utiliza as interfaces
class Usuario(EmailNotificavel, SMSNotificavel):
    def enviar_email(self):
        print("Enviando e-mail para o usuário")

    def enviar_sms(self):
        print("Enviando SMS para o usuário")

# Exemplo de uso
if __name__ == "__main__":
    usuario = Usuario()
    usuario.enviar_email()
    usuario.enviar_sms()
