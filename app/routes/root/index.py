from app import app

@app.route('/')
@app.route('/')
def home():
    return render_templates('root/index.html')
