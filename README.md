# CapturePhotoUsingRaspberryPi

Controlling your DSLR through Raspberry Pi
https://medium.com/@cgulabrani/controlling-your-dslr-through-raspberry-pi-ad4896f5e225

To allow apache2 to run scripts you have to edit /etc/sudoers to enable www-data to run scripts:
www-data ALL=(ALL:ALL) NOPASSWD: /var/www/html/testcamera/capture.sh
