from twilio.rest import Client


def send_sms_alert(text):

        # Define your body
        my_body= text
        # define client
        client = Client('AC67cb7d50e250934c71b802b41069c17e ','1832caee3387aba10aa6b39d3cc7dbaa')
        client.messages.create(to='+919877177020',
                               from_= '+19798595464',
                               body=my_body)

        send_sms_alert('hlooooo i am girl')

