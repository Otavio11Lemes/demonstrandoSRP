from observer import Observer
from subject import Subject

class ChartWidget(Observer):
    def update(self, data):
        print(f"ChartWidget atualizado com novos dados: {data}")

class TableWidget(Observer):
    def update(self, data):
        print(f"TableWidget atualizado com novos dados: {data}")

# Criando o sujeito (Subject)
dashboard = Subject()

# Criando observadores (Observers)
chart_widget = ChartWidget()
table_widget = TableWidget()

# Vinculando os observadores ao sujeito
dashboard.attach(chart_widget)
dashboard.attach(table_widget)

# Simulando uma atualização no sujeito que notifica os observadores
dados_novos = {"label": "Vendas", "valores": [100, 200, 300]}
dashboard.notify(dados_novos)
