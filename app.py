from flask import Flask, render_template, jsonify
import requests

app = Flask(__name__)

@app.route('/')
def main():
    return render_template('index.html')

@app.route('/contact')
def contact():
    return render_template('contact.html')

@app.route('/about')
def about():
    return render_template('about.html')

@app.route('/resources')
def resources():
    return render_template('resources.html')

@app.route('/sponsors')
def sponsors():
    return render_template('sponsors.html')

@app.route('/events-loader')
def event_loader():
    auth_token = fetch_auth_token()
    events = fetch_events(auth_token)
    return jsonify(events)

@app.route('/events')
def events():
    return render_template('events.html')

if __name__ == '__main__':
    app.run()
