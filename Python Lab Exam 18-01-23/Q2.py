import csv
f = open("new.csv","r")
csv_file = csv.DictReader(f)
f1 = open("file.txt","x")
for i in csv_file:
    if(int(i['price'])>1000000):
        f1.write(str(i)+"\n")
f.close()
f1.close()
