import re

def is_username_valid(username):
    nama = username[0]
    cari = re.search('[A-Za-z]', nama)
    if(len(username)>=7):
        if(len(username)<=7):
            if re.search('[A-Z]{7}', username):
                if(cari):
                    print("True")
                else:
                    print("false")
            else:
                print("False")
        else:
            print("False")
    else:
        print("False")

def is_password_valid(password):
    if(len(password)>=8):
        if re.search('[A-Za-z0-9]', password):
            if re.search("[1]{3}[*][s]{3}", password):
                if re.search(password):
                    print("True")
                else:
                    print("False")
            else:
                print("False")
        else:
            print("False")
    else:
        print("False")

is_username_valid('ARKDEMY')
is_username_valid('GALIH')
is_password_valid('111*sss')
is_password_valid('1234*try')