2023학년도 3학기 아티니어 세미나 웹페이지
- seminar
    - users
        
        id(int)(NotNull)(pri)(AutoIncrement)
        
        name(varchar)
        
        user_id(varchar)
        
        user_pw(varchar)
        
    - board
        
        id(int)(NotNull(pri)(autoIncrement)
        
        user(varchar(100))
        
        pw(varchar(100))
        
        title(varchar(100))
        
        content(text)
        
        date(date)
        
        lock_post(tinyint(1))
        
        hit(int)
