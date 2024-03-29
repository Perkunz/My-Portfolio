from flask import Flask
from config import Config

app = Flask(__name__)
app.config.from_object(Config)

app.config['SECRET_KEY']


from app.routes.root import *