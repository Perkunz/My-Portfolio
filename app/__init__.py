from flask import Flask
from config import Config

app = Flask(__name__)
app.config.from_object(Config)

app.config['SECRET_KEY']


from app import *
from app.routes.root import *