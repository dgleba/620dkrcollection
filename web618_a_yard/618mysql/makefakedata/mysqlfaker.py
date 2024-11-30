#!/usr/bin/env python

"""
usage:

  python D:\n\sfile\script\python358\python358b\mysqlfaker.py


to install:

  pip install mysql-connector-python faker


https://stackoverflow.com/questions/32005009/is-there-an-easy-way-to-generate-test-data-in-mysql


https://github.com/joke2k/faker

# row = [faker.name(),faker.text(86), faker.date_time()]
# row = [fake.title(), random.randint(0,99), fake.date_of_birth()]
# cursor.execute(' \
     # INSERT INTO `blogapp_post` (name, age, birth_day) \
     # VALUES ("%s", %d, "%s",);' % (row[0], row[1], row[2])


"""

import random
import datetime
import mysql   #.connector
from mysql.connector import Error  
from faker import Faker

# Faker.seed(3234)
faker = Faker()

conn = mysql.connector.connect(host='10.4.71.231', port='6608', database='dkrdbm',
                               user='user', password='pw55')
cursor = conn.cursor()

for i in range(33):
  nowa = datetime.datetime.now().strftime('%Y-%m-%d %H:%M:%S.%f')
  row = [faker.name(),faker.text(86)]
  cursor.execute(' \
  INSERT INTO blogapp_post \
             (title,body,created,last_updated) \
      VALUES ("%s","%s","%s","%s");' \
           % (faker.name(),faker.text(86),nowa,nowa) )

conn.commit()
