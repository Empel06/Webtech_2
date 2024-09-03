import requests
import random
import time
import json

# API URL
api_url = 'http://server-of-emiel.pxl.bjth.xyz/last_value.php'  # Vervang met je eigen API-URL

def insert_random_temperature():
    while True:
        # Genereer een willekeurige temperatuurwaarde tussen 55 en 60 (decimaal)
        temperature = round(random.uniform(55, 60), 2)

        # Stel de gegevens in voor de POST-aanroep
        data = {'value': temperature}
        
        try:
            # Voer de POST-aanroep uit naar de API
            response = requests.post(api_url, json=data)

            # Controleer de response van de server
            if response.status_code == 200:
                result = response.json()
                print(f"Server Response: {result}")
            else:
                print(f"Failed to insert data. Status code: {response.status_code}")

        except requests.RequestException as e:
            print(f"Error: {e}")

        # Wacht 2,5 seconden
        time.sleep(2.5)

if __name__ == "__main__":
    insert_random_temperature()

