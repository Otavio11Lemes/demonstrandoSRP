def validate_user_data(data):
    if not data.get('name') or not data.get('email') or not data.get('password'):
        return 'Missing data'

    if len(data['password']) < 6:
        return 'Password too short'

    return None
