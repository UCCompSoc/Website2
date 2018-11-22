from flask import Flask, render_template, jsonify, request
import requests

app = Flask(__name__)
DNT_HEADERS = ['Dnt', 'X-Do-Not-Track', 'DNT']

def dnt_enabled():
    ''' Returns True if the client has set the DNT header. '''
    return any(request.headers.get(header, None) == '1' for header in DNT_HEADERS)

@app.route('/')
def main():
    return render_template('index.html', dnt=dnt_enabled())

@app.route('/contact')
def contact():
    return render_template('contact.html', dnt=dnt_enabled())

@app.route('/about')
def about():
    return render_template('about.html', dnt=dnt_enabled())

@app.route('/resources')
def resources():
    return render_template('resources.html', dnt=dnt_enabled())

@app.route('/sponsors')
def sponsors():
    return render_template('sponsors.html', dnt=dnt_enabled())

@app.route('/events')
def events():
    return render_template('events.html', dnt=dnt_enabled())

if __name__ == '__main__':
    app.run()
