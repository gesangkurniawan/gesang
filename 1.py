import json

Bio = {'biodata' : 
        {
            'name' : 'Gesang Kurniawan',
            'age' : 19,
            'address' : 'Losari rt7/rw5,Rembang,Purbalingga',
            'hobbies' : ['menggambar', 'musik','nonton anime'],
            'is_married' : False,
            'list_school' : 
                        [{
                            'Name': 'SMK N 1 Rembang', 
                            'Year_in': 2016, 
                            'Year_out': 2019, 
                            'major':'Rekayasa Perangkat Lunak'
                        }],
            'skills' :  [{
                            'skill_name':[ 'programing,coreldraw,photoshop'], 
                            'level':['Beginner', 'Advanced','Expert'] 
                        }], 
                'interest_in_coding' : True
            }
    
        }

def Biodata(x):
    j = json.dumps(x, indent=2)
    print(j)
    
    
Biodata(Bio)