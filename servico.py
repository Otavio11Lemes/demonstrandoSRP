from werkzeug.security import generate_password_hash

class UserService:
    def create_user(self, data):
        user = {
            'name': data['name'],
            'email': data['email'],
            'password': generate_password_hash(data['password'])
        }
        # Simula o salvamento do usuário no banco de dados
        # Aqui você colocaria o código para salvar o usuário no banco
        return user
