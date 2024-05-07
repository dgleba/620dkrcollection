# ripr

ripr = report - IP - er

Periodically report current PC device IP to central dB using rest api.

If the device uses a dynamic IP address, this tool collects the latest IP address.


## client

On each PC device to report, use curl and cron or windows scheduler to run a curl command to send the current ip address every hour or so.


