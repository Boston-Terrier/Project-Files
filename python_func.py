import sys
##############################################################
import sqlite3
from sqlite3 import Error

x = str(sys.argv[1])
y = str(sys.argv[2])

#--- function testing ---#
#z = x + y;
#print z;
###############################################################
#create SQLite connection
def create_connection(db_file):
    #create a database connection to a SQLite database
    conn = None
    try:
        conn = sqlite3.connect(db_file)
        print("test worked")
    except Error:
        print("test failed")
    return conn

#create table in the DB
def create_table(conn, create_table_sql):
    try:
        c = conn.cursor()
        c.execute(create_table_sql)
        print("table method")
    except Error:
        #print(e)
        print("**table not created successfully**")

#main function to use the previous 2 statements
def main():
    database = r"C:\sqlite\db\pythonsqlite.db"

    sql_create_projects_table = """ CREATE TABLE IF NOT EXISTS projects (
                                        id integer PRIMARY KEY,
                                        name text NOT NULL,
                                        begin_date text,
                                        end_date text
                                    ); """

    sql_create_tasks_table = """CREATE TABLE IF NOT EXISTS tasks (
                                    id integer PRIMARY KEY,
                                    name text NOT NULL,
                                    priority integer,
                                    status_id integer NOT NULL,
                                    project_id integer NOT NULL,
                                    begin_date text NOT NULL,
                                    end_date text NOT NULL,
                                    FOREIGN KEY (project_id) REFERENCES projects (id)
                                );"""

    # create a database connection
    conn = create_connection(database)
    print("database created")

    # creating tables section
    # create tables
    #"""
    if conn is not None:
        # create projects table
        create_table(conn, sql_create_projects_table)
        # create tasks table
        create_table(conn, sql_create_tasks_table)
        print("** projects & tasks tables created **")
    else:
        print("Error! cannot create the database connection.") #"""

#main method execution
if __name__ == '__main__':
    main()

    #-- printing out form input --#
    print("--------- \n")
    print("1st input:\n")
    print x
    print(" -------- \n")
    print("2nd input:\n")
    print y
