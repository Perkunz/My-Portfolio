from app import app
from flask import render_templates

@app.route('/')
@app.route('/')
def home():
    return render_templates('root/index.html')
